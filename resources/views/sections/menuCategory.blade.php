
<div class="menu-category">
    <form class="category" action="{{ route('search') }}" method="POST">
        @csrf
        <input type="text" name="searchMenu" value="Biriyani" hidden>
        <input type="submit" value="Biriyani">
    </form>
    <form class="category" action="{{ route('search') }}" method="POST">
        @csrf
        <input type="text" name="searchMenu" value="Arabic Grill" hidden>
        <input type="submit" value="Arabic Grill">
    </form>
    <form class="category" action="{{ route('search') }}" method="POST">
        @csrf
        <input type="text" name="searchMenu" value="Biriyani" hidden>
        <input type="submit" value="Biriyani">
    </form>
    <form class="category" action="{{ route('search') }}" method="POST">
        @csrf
        <input type="text" name="searchMenu" value="Biriyani" hidden>
        <input type="submit" value="Biriyani">
    </form>
    <form class="category" action="{{ route('search') }}" method="POST">
        @csrf
        <input type="text" name="searchMenu" value="Biriyani" hidden>
        <input type="submit" value="Biriyani">
    </form>
</div>