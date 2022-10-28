<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="text center">
            <nav class="navbar navbar-expand-lg bg-light p-2">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/LOGO.jpg" width="200px" height="80px" class="rounded float-end" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="border-right: 1px solid #bbb;">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" style="border-right: 1px solid #bbb;" href="#">Navega</a>
                            </li>
                            <li class="nav-item dropdown" style="border-right: 1px solid #bbb;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>


                        <div class="modal fade bg-primary" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Inicio De Session</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input class="form-control" type="email" name="" id="">
                                        <br>
                                        <input class="form-control" type="password" name="" id="">
                                    </div>
                                    <div class="modal-footer ">
                                        <a href=""><img src="../img/iniciarSesion.png" width="60px" height="60px" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-success m-2" data-bs-toggle="modal" href="#exampleModalToggle" role="button">LOGIN</a>
                        <a href="#" class="btn btn-primary m-2">REGISTRARME</a>

                    </div>
                </div>
            </nav>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <canvas id="canvas" style="width: 100%; height: 100%;">
                </canvas>
                <script src="../js/three.js"></script>
                <script type="module" src="../js/GLTFLoader.js"></script>
                <script type="module" src="../js/OrbitControls.js"></script>
                <script type="module">
                    import {
                        OrbitControls
                    } from "../js/OrbitControls.js";
                    import {
                        GLTFLoader
                    } from "../js/GLTFLoader.js";

                    //crear la escena
                    var scene = new THREE.Scene();
                    scene.background = new THREE.Color(0xFF3E3E);
                    //--------------------------------------------------------------//
                    //agregar camara

                    var camera = new THREE.PerspectiveCamera(
                        75,
                        window.innerWidth / window.innerHeight
                    );
                    camera.position.y = 1;
                    camera.position.z = 3;
                    //--------------------------------------------------------------//
                    //crear render

                    const canvas = document.querySelector("#canvas");
                    var renderer = new THREE.WebGLRenderer({
                        antialias: true,
                        canvas
                    });
                    renderer.setSize(500, 400);
                    //--------------------------------------------------------------//
                    //cargar objeto
                    const rem = new THREE.Group();
                    const objLoader = new GLTFLoader();

                    objLoader.load(
                        "../js/scene.glb",
                        function(gltf) {
                            console.log(gltf);
                            rem.add(gltf.scene);
                            scene.add(rem);
                        },
                        // called while loading is progressing
                        function(xhr) {
                            console.log((xhr.loaded / xhr.total) * 100 + "% loaded");
                        },
                        // called when loading has errors
                        function(error) {
                            console.log("An error happened");
                        }
                    );
                    rem.rotation.y = 0.3;
                    rem.rotation.x = 0.2;
                    /*const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
                    const cube = new THREE.Mesh(geometry, material);
                    scene.add(cube);*/

                    // crear luz
                    const luz1 = new THREE.AmbientLight(0x9b9b9b, 1);
                    luz1.castShadow = false;
                    scene.add(luz1);
                    /* const luz2 = new THREE.Light(0xffffff, 10);
                     luz
                     scene.add(luz2);*/
                    const luz3 = new THREE.DirectionalLight(0x9b9b9b, 1);
                    luz3.castShadow = false;
                    scene.add(luz3);
                    const light = new THREE.PointLight(0x9b9b9b, 1, 10);
                    light.position.set(0, 0, 5);
                    scene.add(light);
                    //--------------------------------------------------------------//
                    //control de orbita
                    var controls = new OrbitControls(camera, renderer.domElement);
                    controls.minDistance = 3;
                    controls.maxDistance = 5;
                    //--------------------------------------------------------------//

                    /****************************/

                    const raycaster = new THREE.Raycaster();
                    const clickMouse = new THREE.Vector2();
                    var colores2 = '1';
                    window.addEventListener("click", (event) => {
                        clickMouse.x = (event.clientX / window.innerWidth) * 2 - 1;
                        clickMouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
                        raycaster.setFromCamera(clickMouse, camera);
                        const intersects = raycaster.intersectObjects(scene.children);
                        if (colores2 == '1') {
                            for (let i = 0; i < intersects.length; i++) {
                                intersects[i].object.material.color.set(0xc00000);
                                console.log(intersects[i]);
                                //console.log(rem.scene.children.name);
                            }
                            colores2 = '2';
                        } else {
                            for (let i = 0; i < intersects.length; i++) {
                                intersects[i].object.material.color.set(0x362BDA);
                                console.log(intersects[i]);
                                //console.log(rem.scene.children.name);
                            }
                        }
                    });

                    /****************************/
                    //animar
                    function animate() {
                        requestAnimationFrame(animate);
                        //rem.rotation.y += 0.008;
                        renderer.render(scene, camera);
                    }

                    animate();
                </script>

            </div>
            <div class="col">
                <div class="card mb-3" style="width: 100%; height: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../img/kybbanner.png" class="img-fluid " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <footer>
            <div class="row bg-black" id="footerr">

                <div class="col"><img src="../img/LOGOBLACK.jpg" width="400px" height="200px" class="rounded float-end" alt=""></div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>