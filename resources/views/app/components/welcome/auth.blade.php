<h2>Create Game</h2>
<form action="{{ route('game.create') }}" method="POST">
    {{ csrf_field() }}
    <input type="submit" value="Create Game">
</form>

<div class="line">
    <p>or</p>
</div>

<h2>Join Game</h2>
<form action="#">
    {{ csrf_field() }}
    <input type="text" name="game_id" id="game_id" placeholder="AABBCCDD" value="{{ old('game_id') ?? '' }}">
    <input type="submit" value="Join">
</form>
