<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <!-- Description is from OSRS wiki, replace with official version from runescape.com in 2005 if found. -->
    <b>Description:</b> Recent forays into Morytania by some of Saradomin's more fanatical supporters have unearthed murky rumours concerning an abandoned mine in the south. Legend speaks of an unusual material, hidden in the depths of the mines, that is somehow linked to the desolation and fear that now surrounds the place. Do you have the nerve to find out more, and enter the haunted mines of Morytania?
    <br><br>
    <b>Difficulty: <font color="red">Experienced</font></b>
    <br><br>
    <b>Length: <font color="yellow">Medium</font></b>
    <br><br>
    <h3>Required Quests:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Priest in Peril</div></li>
    </ul>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>35 Crafting</div></li>
        <li><div data-progress><canvas itemname="chisel" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress>The ability to defeat a level 95 enemy</div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>15 Agility</div></li>
        <li><div data-progress>40 Prayer</div></li>
        <li><div data-progress>Two empty inventory spaces</div></li>
    </ul>
    <b>Starting Location:</b> Mines in Morytania, Speak to the Zealot
    <br><br>
    <b>Reward:</b> 2 Quest points, 22,000 Strength XP, and a Salve Amulet
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>Go to the Saradominist Zealot near the mines and say you follow Saradomin and ask him what he is doing here. He will tell you about the Zamorak Mage protecting some "sacred crystals" down there and saying how he will kill all who try and steal them.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine1.png">
<br><br>
<div data-progress>Pickpocket the Saradominist Zealot to obtain a key.</div>
<br><br>
<div data-progress>Head south west until you get to a mine cart. Climb over it and you will be at the Entrance to the caves.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine2.png">
<br><br>
<div data-progress>As you enter the mines walk west, do not pay attention to the ladders you will see and head to the other side of the tunnel and out. Go south a few steps then go back in the tunnel. Go east a bit and you will come to a ladder, go down it.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine3.png">
<br><br>
<div data-progress>Head east again and go down the next ladder.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine4.png">
<br><br>
<div data-progress>You should see a mine cart moving around. Do not let it hit you as you can get hurt from it. Instead, make your way up the tracks, hiding in the alcoves to the side whenever the cart comes. At the end of the tracks, go down the ladder.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine5.png">
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine6.png">
<br><br>
<div data-progress>Pick some fungus and bring it to the cart towards the west. Use the fungus with the cart.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine7.png">
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine8.png">
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine9.png">
<br><br>
<div data-progress>Now go to the cart controls and pull these levers: a, b, d, i, e, j.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine10.png">
<br><br>
<div data-progress>Go back to the track map and ensure that it matches the one below. If that did not work just keep changing the levers until your track map looks like this:</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine11.png">
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine12.png">
<br><br>
<div data-progress>Then press the "START" button on the track map. This should transport the cart to the other side of the maze with the fungus along with it.</div>
<br><br>
<div data-progress>Go all the way back up to the Level One of the caves and go down the ladder you ignored earlier. Go east and down another ladder. Go west and down another ladder to the cart. Take the fungus out and go back up the ladder.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine13.png">
<br><br>
<div data-progress>Head east and then keep going down the ladders and south until you get to the water valve. Use the Zealot key you pickpocketed on it and run as fast as you can to the lift before the ghost turns the valve. (Make sure you have high energy before you do it).</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine14.png">
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine15.png">
<br><br>
<div data-progress>Now get ready for the final battle. From the lift go south, then go east and go down the stairs to the lowest level with the fungus. You must now kill a level 95 ghost that is rather hard to kill, as it teleports around the room and many things in the room will attack you.</div>
<br><br>
<div data-progress>I recommend a lot of food for this part. To begin the battle, try to take the innocent looking key. Axes will fly at you, so use protect from ranged; note that the cranes will hit you too (HARD, frequently 25-35 damage), and the enemy continually lures you into their path.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine16.png">
<br><br>
<div data-progress>Once you kill him, take the innocent looking key and head back up a level. Next, head over to some stairs on the other side of the area. Open the door and take the crystal shard.</div>
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine17.png">
<br><br>
<img src="img/questimages/hauntedmine/hauntedmine18.png">
<br><br>
<div data-progress>Quest Complete! You can now use the crystal with the ball of string to get a Salve Amulet, which is very strong against undead. Its stats are: +15% to Accuracy, Strength, and Defense; bonuses are: stab +3, slash +3, crush +3, mage +0, range +0, prayer +3</div>
$questComplete
This quest guide was written by Im4eversmart. Thanks to Xaero0010, Ghoulies, r k o orton,JoshB, DRAVAN, and bainsy44 for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Tue, Dec 21, 2004, at 06:34:15 PM by monkeymatt and was last updated on Tue, Nov 15, 2005, at 09:46:40 PM by DRAVAN.
HTML; }