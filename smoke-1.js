window.addEventListener('DOMContentLoaded', initSmoke1);

function initSmoke1() {
    var camera, scene, renderer,
        geometry, material, mesh;

    var elm = document.getElementById("smoke-1");

    init1();
    animate1();

    function init1() {
        clock1 = new THREE.Clock();

        renderer = new THREE.WebGLRenderer({
            canvas: document.querySelector('#myCanvas-1')
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
        smokeParticles1 = [];

        // p個のparticleメッシュを生成している
        for (p = 0; p < 70; p++) {
            var particle = new THREE.Mesh(smokeGeo, smokeMaterial);
            var radian = Math.random() * 2 * Math.PI;
            var sinValue = Math.sin(radian);
            particle.position.set(
                sinValue * (Math.random() * 400) - 200,
                sinValue * (Math.random() * 500) + 50,
                Math.random() * 1000 - 100
            );

            particle.rotation.z = Math.random() * 360;
            scene.add(particle);
            smokeParticles1.push(particle);
        }

        elm.appendChild(renderer.domElement);

    }


    function animate1() {
        // console.log('animate function is called');
        delta = clock1.getDelta();
        requestAnimationFrame(animate1);
        evolveSmoke1();
        render1();
    }

    function evolveSmoke1() {
        var sp = smokeParticles1.length;
        while (sp--) {
            // textureの回転速度を調整
            smokeParticles1[sp].rotation.z += (delta * 0.075);
        }
    }

    function render1() {
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