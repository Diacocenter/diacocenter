import './bootstrap.js';
import Splide from "@splidejs/splide/dist/js/splide";
import {AutoScroll} from '@splidejs/splide-extension-auto-scroll';
import "./our-story.js";
import "./login-animation.js";
import "./login.js";


if (document.getElementById('blog-splide')) {
    const blog = new Splide('#blog-splide', {
        type: 'loop',
        perMove: 1,
        autoplay: true,
        arrows: false,
        pagination: false,
        gap: '0.9rem',
        perPage: 4,
        breakpoints: {
            576: {perPage: 1},
            992: {perPage: 2},
        },

    });
    blog.mount();
}
if (document.getElementById('new_splide')) {
    const blogNews = new Splide('#new_splide', {
        arrows: false,
        pagination: false,
        autoScroll: {
            speed: 1,
        },
        type: 'loop',
        perPage: 1
    });
    blogNews.mount();
}

if (document.getElementById('project')) {
    const project = new Splide('#project', {
        arrows: false,
        pagination: false,
        autoScroll: {
            speed: 0.5,
        },
        type: 'loop',
        perPage: 4,
        gap:'1rem',
        padding:'10px',
        breakpoints: {
            576: {perPage: 1},
            992: {perPage: 2},
        },
    });
    project.mount({AutoScroll});
}


// let articleBox =  document.getElementById('checkbox')
// let providerItem = document.getElementById("provider")
// let seekerItem = document.getElementById("seeker")
// articleBox.addEventListener('click',log)

// function log(){
//     if (articleBox.checked){
//         seekerItem.classList.remove("fade-out")
//         providerItem.classList.add("fade-out");
//
//         providerItem.addEventListener('transitionend', function(e) {
//             providerItem.classList.add("hidden");
//         });
//
//         seekerItem.classList.remove("hidden");
//     }else {
//         providerItem.classList.remove("fade-out")
//         seekerItem.classList.add("fade-out");
//
//         seekerItem.addEventListener('transitionend', function(e) {
//             seekerItem.classList.add("hidden");
//         });
//
//         providerItem.classList.remove("hidden");
//     }
// }




// import {Application} from '@splinetool/runtime';
//
// const canvas = document.getElementById('canvas3d');
// const app = new Application(canvas);
// app.load('https://prod.spline.design/z0L2qGxdoz4Jde6D/scene.splinecode');


// import * as THREE from 'three';
//
// const scene = new THREE.Scene();
// const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
//
// const renderer = new THREE.WebGLRenderer();
// renderer.setSize( window.innerWidth, window.innerHeight );
// document.getElementById("canvas3d").appendChild( renderer.domElement );
//
// const geometry = new THREE.BoxGeometry( 1, 1, 1 );
// const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
// const cube = new THREE.Mesh( geometry, material );
// scene.add( cube );
//
// camera.position.z = 5;
//
// function animate() {
//
//     requestAnimationFrame( animate );
//
//     cube.rotation.x += 0.01;
//     cube.rotation.y += 0.01;
//
//     renderer.render( scene, camera );
//
// }
//
// animate();
