<form action="/customer" method="post">
    @csrf
    <label for="name">Név: </label>
    <input type="text" name="name" id="name">
    <br>
    <label for="address">Lakcím: </label>
    <input type="text" name="address" id="address">
    <br>
    <label for="contact">Elérhetőség: </label>
    <input type="text" name="contact" id="contact">
    <br>
    <label for="rank">Rang: </label>
    <input type="number" name="rank" id="rank">
    <br>
    <input type="submit" value="Mentés">
</form>
