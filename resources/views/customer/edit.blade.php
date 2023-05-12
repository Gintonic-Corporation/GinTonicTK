<form action="/customer/{{$customer->id}}" method="post">
    @csrf
    @method('put')
    <label for="name">Név: </label>
    <input type="text" name="name" id="name" value="{{$customer->name}}">
    <br>
    <label for="address">Lakcím: </label>
    <input type="text" name="address" id="address" value="{{$customer->address}}">
    <br>
    <label for="contact">Elérhetőség: </label>
    <input type="text" name="contact" id="contact" value="{{$customer->contact}}">
    <br>
    <label for="rank">Rang: </label>
    <input type="number" name="rank" id="rank" value="{{$customer->rank}}">
    <br>
    <input type="submit" value="Frissítés">
</form>

<form action="/customer/{{$customer->id}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Törlés">
</form>
