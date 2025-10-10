<form method="GET" action="index.php">
    <button>Submit</button>

    <input type="text" name="hero_name" id="hero_name" placeholder="Enter hero name"/>
    <label for="hero_name">Recherche...</label>

    <fieldset>
        <input type="radio" id="all" name="role" value="all"checked/>
        <label for="all">Tous</label>

        <input type="radio" id="duelist" name="role" value="duelist"/>
        <label for="duelist">Duelistes</label>

        <input type="radio" id="strategist" name="role" value="strategist"/>
        <label for="strategist">Strategistes</label>

        <input type="radio" id="vanguard" name="role" value="vanguard"/>
        <label for="vanguard">Vanguards</label>
    </fieldset>
</form>