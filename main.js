import * as THREE from 'https://unpkg.com/three@0.174.0/build/three.module.js';

const scene = new THREE.Scene();
scene.background = new THREE.Color(0x0f172a);

const camera = new THREE.PerspectiveCamera(70, window.innerWidth / window.innerHeight, 0.1, 100);
camera.position.z = 4;

const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio);
document.body.appendChild(renderer.domElement);

const cube = new THREE.Mesh(
  new THREE.BoxGeometry(1.35, 1.35, 1.35),
  new THREE.MeshStandardMaterial({ color: 0x38bdf8, roughness: 0.35, metalness: 0.15 })
);
scene.add(cube);

scene.add(new THREE.AmbientLight(0xffffff, 0.65));
const key = new THREE.DirectionalLight(0xffffff, 1.2);
key.position.set(2, 3, 4);
scene.add(key);

const ring = new THREE.Mesh(
  new THREE.TorusGeometry(2.2, 0.03, 16, 120),
  new THREE.MeshBasicMaterial({ color: 0x22d3ee })
);
ring.rotation.x = Math.PI / 2.7;
scene.add(ring);

window.addEventListener('resize', () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});

function animate() {
  requestAnimationFrame(animate);
  cube.rotation.x += 0.01;
  cube.rotation.y += 0.013;
  ring.rotation.z -= 0.002;
  renderer.render(scene, camera);
}

animate();
