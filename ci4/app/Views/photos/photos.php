<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link href="<?= base_url('CSS/style1.css') ?>" rel="stylesheet">
</head>

<body>

    <main>

        <div class="item" data-bg="#688464">
            <h2>Alhaitham</h2>
            <p>Alhaitham is a member of the Haravatat of the Sumeru Akademiya and the Akademiya's Scribe, responsible for documenting their findings and drafting ordinances.</p>
            <div class="labels">
                <label>An Elaboration on Form</label>
                <label>Abductive Reasoning</label>
            </div>
            <div class="details">
                <h4><span>Weapon</span>Sword</h4>
                <h4><span>Element</span>Dendro</h4>
            </div>
            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="bottom">
                <button class="primary">More</button>
            </div>
            <img src="./images/transparentalhaitham.png" />
            <div class="bg"></div>
        </div>

        <div class="item" data-bg="#698ae8">
            <h2>Furina</h2>
            <p>Introduced as the flamboyant and overconfident Hydro Archon, Furina's theatrics are eventually revealed to be a public persona.</p>
            <div class="labels">
                <label>Salon Solitaire</label>
                <label>Let the People Rejoice</label>
            </div>
            <div class="details">
                <h4><span>Weapon</span>Sword</h4>
                <h4><span>Element</span>Hydro</h4>
            </div>
            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="bottom">
                <button class="primary">More</button>
            </div>
            <img src="./images/furina.png" />
            <div class="bg"></div>
        </div>

        <div class="item" data-bg="	#a76666">
            <h2>Hu tao</h2>
            <p>Hu Tao's antics and eccentricity belies her role as the 77th Director of the Wangsheng Funeral Parlor and her talent as a poet.</p>
            <div class="labels">
                <label>Guide to Afterlife</label>
                <label>Spirit Soother</label>
            </div>
            <div class="details">
                <h4><span>Weapon</span>Polearm</h4>
                <h4><span>Element</span>Pyro</h4>
            </div>
            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="bottom">
                <button class="primary">More</button>
            </div>
            <img src="./images/hutao.png" />
            <div class="bg"></div>
        </div>

            <form action="<?= base_url('main') ?>" method="get">
              <button class="primary" type="submit">Back to About Me</button>
            </form>
    
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
    <script src="<?= base_url('JS/app1.js') ?>"></script>

</body>

</html>