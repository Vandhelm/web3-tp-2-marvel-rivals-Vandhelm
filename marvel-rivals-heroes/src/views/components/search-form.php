
<form method="GET" action="index.php" class="d-flex align-items-center bg-transparent py-3">
    
    <div class="search-bar">
        <button class="search-button">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>

        <input type="text" name="hero_name" id="hero_name" placeholder="Recherche..."/>

    </div>
    
    
    <fieldset class="role-filter">
        
        <input type="radio" id="all" name="role" value="all"checked/>
        <label for="all">Tous</label> 

        <input type="radio" id="duelist" name="role" value="duelist"/>
        <label for="duelist">
            <img src="public/images/ui/icons/classes/duelist-icon.png" alt="icône de classe">
            <span>Duelistes</span>
        </label>

        <input type="radio" id="strategist" name="role" value="strategist"/>
        <label for="strategist">
            <img src="public/images/ui/icons/classes/strategist-icon.png" alt="icône de classe">    
                <span>Strategistes</span>
        </label>

        <input type="radio" id="vanguard" name="role" value="vanguard"/>
        <label for="vanguard">
            <img src="public/images/ui/icons/classes/vanguard-icon.png" alt="icône de classe">
            <span>Vanguards</span>
        </label>

    </fieldset>
</form>
