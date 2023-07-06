const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
let gradient;

function resize() {
    canvas.width = document.documentElement.clientWidth;
    canvas.height = document.documentElement.clientHeight;
    gradient = ctx.createLinearGradient(
        canvas.width, 0, 0, canvas.height
    );
    gradient.addColorStop(0, 'rgba(0, 255, 255, 0.7)');  // 水色に近い光を表現した色に変更
    gradient.addColorStop(0.5, 'rgba(70, 130, 180, 0.7)');  // 光を表現した中間色に変更
    gradient.addColorStop(1, 'rgba(25, 25, 112, 0.7)');  // 深海のような濃い青色に変更
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle = gradient;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    requestAnimationFrame(animate);
}

window.addEventListener('resize', resize);
resize();
animate();
