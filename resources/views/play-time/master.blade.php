
<html>
    <head>
        <style>
            .headerMenuContainer {
                display: flex;
                justify-content: flex-end;
                width:100%;
                height:150px;
                background-color:rgba(10,200,25,.1);
                align-items: center;
            }

            .headerMenuContainer ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .headerMenuContainer li {
                display: inline;
            }

            .headerMenuContainer li a {
                text-decoration: none;
                color:black;
                padding:10px;
                display:inline-block;
                background-color:white;
            }

            .headerMenuContainer li a:hover {
                background-color:rgba(10,200,25,.1);
            }
        </style>
    </head>

    <body>

        <div class="headerMenuContainer">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Music</a>
                </li>
                <li>
                    <a href="#">Dev</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
            </ul>
        </div>
        <div>
            @yield("content")
        </div>

    </body>

</html>