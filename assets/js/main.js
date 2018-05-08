(function () {
    function init(){}
    ajax('post', 'data.php', {city: 'Phuket'}, function (r) {
        console.log(r);
    });
    window.addEventListener('load',init);
})();