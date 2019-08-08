var animation = bodymovin.loadAnimation({
    container: document.getElementById('bm'),
    renderer: 'svg',
    name: 'ok',
    //autoplay: true,
    //width: '10px',
    path: '/ok.json',
    renderConfig: {
        viewBoxOnly: false
    }
});

//animation.name = 'ok';