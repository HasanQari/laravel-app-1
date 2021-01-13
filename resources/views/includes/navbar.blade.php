<nav class="navbar navbar-inverse navbar-expand-sm navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <ul class="nav navbar-nav navbar-left">
            <li class="nav-item">
                <p id="date" class="navbar-text" style="margin: 0; padding: 0"></p>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <div class="dropdown" style="float: right;">
                    <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        EN
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </div>
            </li>
            
        </ul>
    </div>
</nav>

<script>
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
</script>


