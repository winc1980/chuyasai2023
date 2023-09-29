window.addEventListener('DOMContentLoaded', initSmoke2);

function initSmoke2() {
    var camera, scene, renderer,
        geometry, material, mesh;

    var elm = document.getElementById("smoke-2");

    init2();
    animate2();

    function init2() {
        clock2 = new THREE.Clock();

        renderer = new THREE.WebGLRenderer({
            canvas: document.querySelector('#myCanvas-2')
        });
        renderer.setSize(elm.clientWidth, elm.clientHeight);

        scene = new THREE.Scene();

        camera = new THREE.PerspectiveCamera(90, elm.clientWidth / elm.clientHeight, 1, 10000);
        camera.position.z = 1000;
        scene.add(camera);

        geometry = new THREE.BoxGeometry(200, 200, 200);
        material = new THREE.MeshLambertMaterial({ color: 0xaa6666, wireframe: false });
        mesh = new THREE.Mesh(geometry, material);
        // scene.add( mesh );
        cubeSineDriver = 0;

        light = new THREE.DirectionalLight(0xffffff, 0xffffff, 1.0);
        light.position.set(-1, 0, 1);
        scene.add(light);


        smokeTexture = new THREE.TextureLoader().load('images/Smoke-Element.png');
        smokeMaterial = new THREE.MeshLambertMaterial({ color: 0xE4E4E4, map: smokeTexture, transparent: true, opacity: 0.1 });
        smokeGeo = new THREE.PlaneGeometry(300, 300);
        smokeParticles2 = [];

        // p個のparticleメッシュを生成している
        for (p = 0; p < 70; p++) {
            var particle = new THREE.Mesh(smokeGeo, smokeMaterial);
            var radianOne = Math.random() * 2 * Math.PI;
            var radianTwo = Math.random() * 2 * Math.PI;
            var sinValue = Math.sin(radianOne);
            var y = sinValue * (Math.random() * 500) - 50
            var x = y * -1
            particle.position.set(
                x + Math.sin(radianTwo) * 150,
                y  + 90,
                Math.random() * 1000 - 100
            );
            
            particle.rotation.z = Math.random() * 360;
            scene.add(particle);
            smokeParticles2.push(particle);
        }


        elm.appendChild(renderer.domElement);

    }

    function animate2() {
        delta = clock2.getDelta();
        requestAnimationFrame(animate2);
        evolveSmoke2();
        render2();
    }

    function evolveSmoke2() {
        var sp = smokeParticles2.length;
        while (sp--) {
            // textureの回転速度を調整
            smokeParticles2[sp].rotation.z += (delta * 0.125);
        }
    }

    function render2() {
        mesh.rotation.x += 0.005;
        mesh.rotation.y += 0.01;
        cubeSineDriver += .01;
        mesh.position.z = 100 + (Math.sin(cubeSineDriver) * 500);
        renderer.render(scene, camera);
    }

    window.addEventListener('resize', function () {
        const width = elm.clientWidth;
        const height = elm.clientHeight;

        // レンダラーのサイズを調整する
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(width, height);

        // カメラのアスペクト比を正す
        camera.updateProjectionMatrix();
    });
}