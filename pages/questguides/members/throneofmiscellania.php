<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> One of the ships of Rellekka is setting sail for two of the former Fremennik colonies - the now independent island of Miscellania and its smaller sister island of Etceteria. These islands are said to have prospered in recent years and now have their own castles, a bank, a blacksmith and a healthy market trade in fish and vegetables. However, rumors have been coming back from Miscellania that all is not well. It is said that the king has been turned into a monster!
    <br><br>
    An exceptional hero is required to investigate. Maybe in the end there might even be the opportunity for the right person to take the reins and try to rule over the land themselves. The road to power is not a straightforward one though, experience in wooing royalty and negotiating peace would be an advantage.
    <br><br>
    The residents of Miscellania Castle are widely regarded as some of the hardest workers ever seen. A well respected Monarch should have no problems in convincing his subjects to collect raw materials for "royal inspection", though gaining and maintaining that respect could prove another challenge in itself.
    <br><br>
    <b>Difficulty: <font color="Red">Experienced</font></b>
    <br><br>
    <b>Length: <font color="green">Short</font></b>
    <br><br>
    <h3>Required Quests:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Hero's Quest</div></li>
        <ul style="list-style-type: none;">
            <li><div data-progress>Shield of Arrav</div></li>
            <li><div data-progress>Lost City</div></li>
            <li><div data-progress>Merlin's Crystal</div></li>
            <li><div data-progress>Dragon Slayer</div></li>
        </ul>
        <li><div data-progress>The Fremennik Trials</div></li>
    </ul>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Five empty inventory slots</div></li>
        <li><div data-progress><canvas itemname="iron_bar" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="gold_ring" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="logs" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress>At least one of the following to gain favour during the quest:</div></li>
        <ul style="list-style-type: none;">
            <li><div data-progress>1,875gp to buy flowers from Flower Girl</div></li>
            <li><div data-progress>An axe and Woodcutting 45 Woodcutting to cut maple trees</div></li>
            <li><div data-progress>A rake and Farming 10 Farming to rake flax</div></li>
            <li><div data-progress>A pickaxe and Mining 35 Mining to mine coal</div></li>
            <li><div data-progress>A harpoon or lobster pot and Fishing 35 Fishing to fish tuna, lobsters or swordfish</div></li>
        </ul>
        <li><div data-progress>If seeking the Prince's trust: a cake (chocolate cakes work too)</div></li>
        <li><div data-progress>If seeking the Princess's trust: a shortbow or longbow</div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress><canvas itemname="3dose1energy" show-label="inline"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> Speak to King Vargas in Miscellania, take the ship from Rellekka.
    <br><br>
    <b>Reward:</b> 1 QP, Your very own kingdom to manage! and 10k gp (speak to the adviser, select see how you're going, and in coffers there is 10k, withdraw it).
</div>
<h3>Instructions:</h3>
<br>
<img src="img/questimages/throneofmiscellania/throneofmiscellania1.gif">
<hr>
<h3>Part 1: Get married - Male Players</h3>
<br>
<div data-progress>Talk to the king and find out about his daughter and the queen</div>
<br><br>
<img src="img/questimages/throneofmiscellania/throneofmiscellania2.png">
<br><br>
<div data-progress>Speak to the advisor and ask about the princess, the king and the queen.</div>
<br><br>
<div data-progress>Go talk with the princess, give her the flowers, say all the good things until when you talk to her you only get the same thing</div>
<br><br>
<div data-progress>Using the Dance emoticon Dance for the princess</div>
<br><br>
<div data-progress>Continue talking and find out about her archery</div>
<br><br>
<div data-progress>Give her the bow</div>
<br><br>
<div data-progress>Continue talking, blow her a kiss then talk to the advisor about the engagement ring</div>
<br><br>
<div data-progress>Give the ring to the princess and that's that complete and talk to her, she should agree to marry you.</div>
<hr>
<h3>Part 1: Get married - Female Players</h3>
<br>
<div data-progress>Talk to the king and find out about his daughter and the queen</div>
<br><br>
<div data-progress>Speak to the advisor and ask about the princess, the king and the queen.</div>
<br><br>
<div data-progress>Go talk to Prince Brand in room south of the king. Listen and say he'll be the greatest bard. Listen to poem and say no one understands his poetry like you.</div>
<br><br>
<div data-progress>Give him flowers (buy for 15gp from flower girl in market.)</div>
<br><br>
<div data-progress>Using the Dance emoticon Dance for the prince. Also using the clap emoticon, Clap for him.</div>
<br><br>
<div data-progress>Listen to poem and praise it, continue to talk to him.</div>
<br><br>
<div data-progress>Give him a cake.</div>
<br><br>
<div data-progress>Continue talking, blow him a kiss then talk to the prince 3 more times and then give him the engagement ring</div>
<hr>
<h3>Part 2: The Treaty</h3>
<br>
<div data-progress>Talk to the queen on the other side of the island and find out about the king</div>
<br><br>
<div data-progress>Go back to the king and talk to him. He will tell you that the queen must change their national anthem.</div>
<br><br>
<div data-progress>Go back to the queen and she will ask you to find her a new national anthem.</div>
<br><br>
<div data-progress>Go to the prince and ask him for one.</div>
<br><br>
<div data-progress>Take the prince creation to the advisor who will re-do it, take it to the queen and she will give you a treaty for the king to sign.</div>
<br><br>
<div data-progress>Take it to the king, he will need a large pen, go north, talk to Derrick (near the Anvil) and give him the iron bar, he will give u a pen nib.</div>
<br><br>
<div data-progress>Go cut down normal logs and use them with the pen nib to give giant pen.</div>
<br><br>
<div data-progress>Talk to the king and he will tell you to get the support of the citizens, do this by mining, cutting maples, weeding or fishing, you get various exp for each task you do, the harder the task the more exp it gives, eg Coal gives 0.8% coal per rock were weeding the herbs is quicker and easier but only gives 0.1% per weed weeded.</div>
<br><br>
<div data-progress>Talk to the advisor to see your approval rating, you need at least a 75% to be made regent of the land. Keep working until you reach at least 75% and then talk to the king!</div>
$questComplete
<br>
<h3>Kingdom Management</h3>
<br><br>
After you've finished the quest the kingdom is yours, in it you can do various tasks to gain resources etc
Go to the advisor and speak to him about his book, he will give you one for free, it explains how to run the kingdom properly
<br><br>
You must keep your popularity up otherwise the workers will not work for you very much at all, you must also pay them for their services otherwise they wont collect resources for you, to do this take an amount of gp (up to 5 million) and talk to the advisor, talk to him about changing management and in the screen with the map on deposit the amount you wish to pay them, one tenth of this is used a day, but the more you pay the more they will collect
<br><br>
You must also keep up your popularity, to do this do the same as in the quest by helping the workers with their chores, the higher your popularity the more they will work
<br><br>
Changing the amount of people on each task will also change how much of resource you get, such as all on herbs will get you a lot of herbs etc
Don't keep going back every hour for resources as probably not much will have been collected, go once a day and get bigger but less frequent amounts
<br><br>
I think that sums up kingdom management in a nutshell
<br><br>
Here is a picture of your new kingdom courtesy of bob151jr
<br><br>
<img src="img/questimages/throneofmiscellania/throneofmiscellania3.png">
<hr>
This quest guide was written by jtfa0007 and SirKelvin. Thanks to pingu_head, Blurry2004, vanja123, Giac_Jr, rapsak, Elyria1, InuYasha3336, and Galalad for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Sun, Dec 05, 2004, at 07:21:45 AM by MrStormy and was last updated on Sat, Oct 29, 2005, at 05:24:27 AM by Fireball0236.
HTML; }