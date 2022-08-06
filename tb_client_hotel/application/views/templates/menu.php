<nav class="navbar navbar-expand-md bg-info navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?= base_url('reservation'); ?>">RESERVATION HOTEL</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($this->uri->segment(1) == 'guest') ?> active">
                <a class="nav-link" href="<?= base_url('guest'); ?>">Guest</a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'reservation') ?> active">
                <a class="nav-link" href="<?= base_url('reservation'); ?>">Reservation</a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'room_type') ?> active">
                <a class="nav-link" href="<?= base_url('room_type'); ?>">Room Type</a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'room') ?> active">
                <a class="nav-link" href="<?= base_url('room'); ?>">Room </a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'bill') ?> active">
                <a class="nav-link" href="<?= base_url('bill'); ?>">Bill</a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'receptionist') ?> active">
                <a class="nav-link" href="<?= base_url('receptionist'); ?>">Receptionist</a>
            </li>
            <li class="nav-item <?php if ($this->uri->segment(1) == 'payment') ?> active">
                <a class="nav-link" href="<?= base_url('payment'); ?>">Payment</a>
            </li>
        </ul>
    </div>
</nav>