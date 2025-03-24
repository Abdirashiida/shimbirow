<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);

function isActive($page) {
    global $current_page;
    return $current_page == $page ? 'active' : '';
}
?>

<style>
/* Custom hover effect */
.custom-hover {
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    padding: 8px 15px;
}

.custom-hover:hover {
    background-color: #007bff; /* Change to your preferred colour */
    color: white !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Active link styling */
.active {
    background-color: #007bff;
    color: white !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.pagination {
        display: flex;
        justify-content: end;


        text-align: right;

    }
    
    .pagination button {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        background-color: #fff;
        border-radius: 5px;
    }

    .pagination button.active {
        background-color: #60a2ff;
        color: white;
        border: 1px solid #60a2ff;
    }
    .no-results {
        display: none;
    }
    

</style>

<div class="container mt-3">

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand flex-grow-1" href="#">
            <img style="width: 40px;" src="assets/img/logo/logo.png" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto gap-3 border-bottom border-top">
                <li class="nav-item rounded">
                    <a class="nav-link fw-bold custom-hover <?php echo isActive('index.php'); ?>" href="index.php">Cashiro</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link fw-bold custom-hover <?php echo isActive('khudbo.php'); ?>" href="khudbo.php">Khudbo</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link fw-bold custom-hover <?php echo isActive('qa.php'); ?>" href="qa.php">Su'aalo iyo jawaabo</a>
                </li>
                <li class="nav-item rounded">
                    <a class="nav-link fw-bold custom-hover <?php echo isActive('duruus.php'); ?>" href="duruus.php">Duruus</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</div>
