<script src="https://kit.fontawesome.com/3bfa0f6a2e.js" crossorigin="anonymous"></script>

<script>
    function toggleMenu() {
        let menu = document.getElementById('menu');
        if (menu.className.includes('open')) {
            document.getElementById('menu').classList.add('close');
            document.getElementById('menu').classList.remove('open');
        } else {
            document.getElementById('menu').classList.remove('close');
            document.getElementById('menu').classList.add('open');
        }
    }
</script>

<script>
    window.onload = () => {
        let banner = document.getElementsByClassName('banner')[0];
        let pages = document.getElementById('banner-pages').innerText.split('-');
        console.log(pages)
        let show = false;
        for (let i = 0; i < pages.length - 1; i++) { //-1 index because we wan't to exclude last - which leads to an empty string being always found
            if (location.href.includes(pages[i]) && pages[i].slice(-1) != "/") {
                show = true;
            } else if (pages[i] == '<?php echo $routes['home'] ?>' && location.href.slice(-1) == "/") {
                show = true
            }
        }
        if (show) banner.style.display = "block";
    }
</script>