window.addEventListener('DOMContentLoaded', initSmoke3);

function initSmoke3() {
    var camera, scene, renderer,
        geometry, material, mesh;

    var elm = document.getElementById("smoke-3");

    init3();
    animate3();

    function init3() {
        clock3 = new THREE.Clock();

        renderer = new THREE.WebGLRenderer({
            canvas: document.querySelector('#myCanvas-3')
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
        smokeParticles3 = [];

        // p個のparticleメッシュを生成している
        for (p = 0; p < 110; p++) {
            var particle = new THREE.Mesh(smokeGeo, smokeMaterial);
            var radianOne = Math.random() * 2 * Math.PI;
            var radianTwo = Math.random() * 2 * Math.PI;
            var sinValue = Math.sin(radianOne);
            var y = sinValue * (Math.random() * 200);
            var x = y + Math.sin(radianTwo) * 130;
            particle.position.set(
                x,
                y + 50,
                Math.random() * 1000 - 100
            );

            particle.rotation.z = Math.random() * 360;
            scene.add(particle);
            smokeParticles3.push(particle);
        }


        elm.appendChild(renderer.domElement);

    }

    function animate3() {
        delta = clock3.getDelta();
        requestAnimationFrame(animate3);
        evolveSmoke3();
        render3();
    }

    function evolveSmoke3() {
        var sp = smokeParticles3.length;
        while (sp--) {
            // textureの回転速度を調整
            smokeParticles3[sp].rotation.z += (delta * 0.075);
        }
    }

    function render3() {
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