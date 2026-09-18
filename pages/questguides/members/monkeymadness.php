<?php
function getQuestGuide($questName, $questComplete) { return <<<HTML
<div id="narrowscroll">
    <h2>$questName</h2>
    <b>Description:</b> The King of the northern Gnomes, Narnode Shareen, is once again in need of your help. He recently decided to send an envoy of his Royal Guard, the 10th squad, to oversee the decommissioning of the Gnome owned ship-building facilities on the eastern coast of Karamja.
    <br><br>
    It has been quite some time since the 10th squad were dispatched and they have been deemed missing in action. It will be up to you, should you decide to help, to find out what fate befell the 10th squad and if possible, track them down.
    <br><br>
    If only it were so simple. Sinister forces have begun to spread through the Gnome hierarchy and threaten to unleash an unknown terror upon the world. Far across the land, the fires of vengeance are being stoked once again. Can you unravel the mystery behind the deception? Can you seperate the truth from the lies? Can you decide for yourself what is real and what is not?
    <br><br>
    <b>Difficulty: <font color="Red">Experienced</font></b>
    <br><br>
    <b>Length: <font color="Red">Long</font></b>
    <br><br>
    <h3>Required Quests:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>The Grand Tree</div></li>
        <li><div data-progress>Tree Gnome Village</div></li>
    </ul>
    <h3>Items & Skills Needed:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>Five empty inventory slots</div></li>
        <li><div data-progress><canvas itemname="gold_bar" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="ball_of_wool" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="mm_normal_monkey_bones" show-label="inline" name-append=" (obtainable during quest)"></canvas></div></li>
        <li><div data-progress><canvas itemname="banana" show-label="inline" name-replace="5 bananas (obtainable during quest)"></canvas></div></li>
        <li><div data-progress>The ability to defeat a level 195 Jungle Demon</div></li>
    </ul>
    <h3>Recommended:</h3>
    <ul style="list-style-type: none;">
        <li><div data-progress>43 Prayer</div></li>
        <li><div data-progress><canvas itemname="3doseantipoison" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="3dose1energy" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="3doseprayerrestore" show-label="inline"></canvas></div></li>
        <li><div data-progress><canvas itemname="knife" show-label="inline" name-replace="A knife for free healing, as there are pineapple plants around Ape Atoll"></canvas></div></li>
        <li><div data-progress><canvas itemname="lockpick" show-label="inline"></canvas></div></li>
        <li><div data-progress>High healing food</div></li>
        <li><div data-progress><canvas itemname="ring_of_life" show-label="inline" name-append=" (or an emergency teleport)"></canvas></div></li>
        <li><div data-progress><canvas itemname="coins_10000" show-label="inline" name-replace="200,000 coins (if skipping the puzzle)"></canvas></div></li>
    </ul>
    <b>Starting Location:</b> Speak to King Narnode at The Grand Tree
    <br><br>
    <b>Reward:</b> 3 Quest points, 10,000gp, 3 Diamonds; <!--the right to wield the Dragon scimitar; -->talk to Daero to get training in Strength and Hitpoints OR Attack and Defense. You get 35,000 CP in the 2 skills of your choice and 20,000 CP in the other 2 skills you didn't choose.
</div>
<h3>Instructions:</h3>
<br>
<div data-progress>The King of the northern Gnomes, Narnode Shareen, is once again in need of your help. He recently decided to send an envoy of his Royal Guard, the 10th squad, to oversee the decommissioning of the Gnome owned ship-building facilities on the eastern coast of Karamja. It has been quite some time since the 10th squad was dispatched and they have been deemed missing in action. It will be up to you, should you decide to help, to find out what fate befell the 10th squad and if possible, track them down. If you are doing this quest all in one go then I recommend that you wear appropriate armor, dueling ring, take 4 antipoision potions, and food before talking to the king. Talk with King Narnode and learn that he has a new quest for you. He tells you that Glough has been replaced. You are now on your quest to find the King's Royal Guard and to tell the king what happened. He will give you his Seal.</div>
<br><br>
<div data-progress>Now go to the Top of the Grand Tree and take the glider to Karamja. Make sure you have the Gnome Royal Seal which the king gave you or you wouldn't be able to get through the doors to get to the Shipyard. Go to the shipyard and talk with G.L.O. Caranock. He will tell you that the Royal Guard might have been blown off course by some winds.</div>
<br><br>
<div data-progress>Go back to the king and tell him what Caranock said. He will now send you to Daero (at Blurberry's Bar on the second floor of the Grand Tree, southeast path) with some orders. Talk with Daero, he will blindfold you and take you to a Glider Hangar. Daero and your pilot will talk a little. Now go ask Daero why the gliders are folded, he will tell you that they are locked with a code.</div>
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness1.png">
<br><br>
<div data-progress>You will discover the Code is a sliding Puzzle, You can skip this part if you have 200k to waste, but if you want to have a challenge do the puzzle and it's all free. Step over to the red control panel (Reinitialisation Panel red dot on above guide map) to begin the puzzle. If you logout half way through puzzle sometimes it resets the puzzle and you have to do it all over again. So do the puzzle inone go and then log out. IF you wish to pay to solve go find Glough he is located in tree south and slightly southeast of path. Picture of Puzzle When you are done it will look like this. It is easiest to complete the rows in this order: Red, Yellow, Green, Cyan And last Purple. (This also applies to Treasure Trail Sliding Puzzles).</div>
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness2.png">
<br><br>
<div data-progress>Now the screen will change and the gliders will fold out and stand ready. You are ready to go. Talk to Waydar and you fly to the isle where 10th Crashed, known as Crash Island. You will find a member of the 10th squad, Lumdo; talk with him. At first he won't sail you to Ape Atoll. Talk to Waydar about convincing him and then he will sail you to Ape Atoll.</div>
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness3.png">
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness4.png">
<br><br>
<div data-progress>Once you arrive in Ape Toll, keep going to the north of the isle and follow the shore and Cliff west. When the cliff turns go that way and you will be shot with a lot of arrows, so turn on Protect from Ranged prayer now and you will take minimum damage (not necessary but sometimes they can take off 20+ dmg and sometimes they take off 0).</div>
<br><br>
<div data-progress>You will end up in a cage in the Jail with three members of the 10th guard; they will talk for a little while. Nothing important if you are using the guide here. Have 1 dose of your Antipoison if you are poisoned and have soem food if you are injured. There is a monkey guard outside do not come too near him (don't go into the squares near the jail door when he is around the Jail or you will take damage). He will patrol 2 times then he will go to the Switch room and switch with his partner. This is your chance when he does this, pick the lock and run out to the Grass area where Karam is located on the map above. If you pick the lock before and wait on outside on the left if the cage u can do so, but there is a lvl1 spider there which keeps attacking you and it also poisons you sometimes. (Side note, if you play high detail there are some grass spots that don't hide you, maybe play in low detail if you want to hide in the right places). Once you are by Karam talk to him. Restore energy and health here if you really need to.</div>
<br><br>
<div data-progress>There is a temple to the south east. This has lots of lvl 167 guards in it. Go in there if you NEED TO with Protect of Melee ON and you can recharge by praying at the temple ad not take any damage from the guards. Now you have to speak to the seargant. Do not go east around the temple to get to sergeant. There is a little house on the south of temple. Form where Karam is go south and when you are south of temple then go east. When you see the house on the east of it is the sergeant. Go speak to him and he will tell you that you have to make an alliance with the monkey king and you have to speak to Zooknock in a tunnel.</div>
<br><br>
<div data-progress>Now you have to get into a house south of The Statue in the middle of the city (refer to map above). To get into the house you have to GO AROUND THE BACK and go through the back door. Stay in the grass as much as possible; don't run too long even with Protect from Ranged on. You must stay in the brown on the inside of the house. Its the dark brown part. The house is filled with crates. Now Search some crates near the Trapdoor (You cannot go near the trap door or the monkey guys come and send you back to jail.) (1 Crate on top of another). Take the Monkey Dentures you find there. Now search the most South East crate say YES and you will land in a cave (be careful because it will damage you). Go northwest in that cave (see upper part of map below) and search the Crates to find the M'Amulet mould.</div>
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness5.png">
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness6.png">
<br><br>
<div data-progress>Use your dueling ring to teleport to al-kharid. Go to Lumbridge temple if you want to restore prayer points. Then go to Al-Kharid Bank and store all your weapons and armor. Get 4 anti-poison pots, 6 energy pots, gold bar, monkey dentures, monkey amulet mould, food and wear weapon and armor which increase your prayer points (mace, shade robe set, priest gowns, holy symbol, etc). Now you have to go into the tunnel. Speak to Glider in Al-Kharid to fly to Tree Gnome Stronghold. Then go downstairs, Speak with Daero to go to hangar. The to Waydar and then to Lumbo. Once in Ape Toll go into the (!) Dungeon Sign just west of the little boat.</div>
<br><br>
<img src="img/questimages/monkeymadness/monkeymadness7.png">
<br><br>
<div data-progress>Right now turn on your Protect from Melee. And keep yourself on run all the time. Eat food when you have low health. Drink anti-poison when you are poisoned and drink energy potion when you are running out of energy. It is this simple. Then just run all the way to the end of the tunnel until you find three gnomes. Talk with the mage gnome, Zooknock. He will tell you that you need to get him these items: Gold bar, something to do Monkey Speech, a Monkey amulet mould, Monkey remains and a Monkey Talisman. Use the Gold Bar, Monkey Denture and Amulet Mould with Zooknock and then he gives a "green gold bar" and monkey amulet mould.</div>
<br><br>
<div data-progress>Use your dueling ring to go back to Al-Kharid. Recharge you prayer points in Lumbridge, and go to Bank. Equip yourself with good armor and weapon take 4 anti-poison pots, green bar, monkey amulet mould, ball of wool and food. Get back to Ape Toll, and follow unti you get shot down again and you end up in prison. Get out of prison like the way it is mentioned above and go by Karam.</div>
<br><br>
<div data-progress>Now you need to go down the trapdoor in the temple with lvl 167 Monkey Guards. Go in the temple with protect from Melee on. You can always recharge because there is a temple there and the lvl 167 don't take any damage off you. Now in the temple go northeast behind the furnace thing. Here the monkeys cant attack you so you can put protect from melee off. To get into the trapdoor you need to stand in front of it. It is guarded by 2 monkey guards. When the guard moves away and you see the space switch your protect from melee on and RUN TO THE FRONT OF THE TRAP DOOR. Then go down it. There are a lot of Zombies and high lvl thing s here so Keep the protect from melee turned on and use the enhanced bar with the wall of flames. And then use your ball of wool with it. Then Climb up the rope back into temple. Then straight away climb up ladder. Now it is safe to put the protect from melee off. Use your dueling ring to go back to Al-Kharid.</div>
<br><br>
<div data-progress>Recharge your prayer in lumbridge. Go to Bank. Get 4 anti-poison pots. Wear Full Armor. Wear Monkey Speak Amulet. Get Back to Ape Toll. Get into Prison and the escape out into the Grass area by Karam. Go into the house where you got the monkey dentures from. Go South West and search the crate for bananas. Take 4-5 bananas. Now go back up to the grass area by karam. Look at the map where it says the monkey child. Go to the house east of it from the hole in the wall through the back. There is an ally on west part of the house.</div>
<br><br>
<div data-progress>Now you see monkey child and monkey child's aunt. The aunt CAN NOT SEE YOU otherwise she'll call the guards and you end up in jail. So what you do is that everytime the aunt goes into the house west of garden you speak to the monkey child. And everytime you see her coming back go hide in the allyway. Speak to the child and tell him you are his uncle. He'll tell you that his aunt has asked him to collect 20 bananas. But since he cant count you can him any amount (about 4-5). Speak with him again and give him all the bananas. Wait a bit and then speak to him and he'll give you the monkey talisman. Use dueling ring to teleport to Al-Kharid.</div>
<br><br>
<div data-progress>Now recharge prayer if you need to. Go to Al-Kharid Bank. Store all weapon and armor in bank. Wear dueling ring, and armor which helps prayer, 4 anti-poison potions, 6 energy potions, monkey talisman, monkey corpse *or* monkey bones and food. Go to Ape Toll. Then go down the tunnel to Zooknock. Use both items with Zooknock and you will get a Monkey Gregree. Now you can be relieved because everytime you wield this you turn into a Karamja monkey and you won't be attacked in Ape Atoll. Teleport back to Al-Kharid. Recharge your prayer points and go to bank. Wield Monkey Speak Amulet, Good Armor. Take Anti-Poison Potions, monkey gregree, and food.</div>
<br><br>
<div data-progress>Go to ApeToll. Once there wield the Monkey Gregree and you'll turn into monkey. Go Northwest following the cliff and you'll see a gate (where the monkey archers normally shoot you down). Go through the gate and go speak to sergeant. Then Speak to elder guard right by the sergeant. He wont let you through. So Go South West and up the cliff. Then go up the ladder across the bridge and down the ladder to speak to Kruk. Kruk takes you to the monkey king. Speak with Monkey King and ask for alliance. He will tell you to rescue a monkey from Ardougne Zoo. Talk with elder guard to get out.</div>
<br><br>
<div data-progress>Teleport to Al-Kharid using dueling ring. Now Go to Ardougne Zoo. Speak with Monkey minder. Then wield the monkey gregree and speak to him. He'll put you in a cage. Speak with a monkey in the cage and you'll put it in your inventory. Then unwield the monkey gregree you'll turn back into human. Speak with Monkey Minder and he'll let you out. WALK TO GRAND TREE. Do not teleport there or use spirit trees. Fly Back to Ape Toll. Wield the Monkey Gregree again and go to the monkey king by speaking to guard. The king will think about an alliance. Then go talk to the sergeant and he will give you a sigli; you are now a member of the 10th Guard.</div>
<br><br>
NOTE: You may have to talk to the Sergeant 2 or 3 times; also you may need to be a human to get the Sigil. If you die and lose the Sigli, check with the Sergeant; he will send you to Waymottin (?) in the mage tunnel. If you lose the monkey amulet, obtain the items again and visit the mage again. The Monkey Child will cry but if you log out and back in he will stop crying.
<br><br>
DO NOT WEAR THE SIGLI UNLESS YOU ARE READY TO FIGHT THE LVL 195 DEMON.
<br><br>
HOW TO DEFEAT THE LVL 195 DEMON
<br><br>
There are several ways of destroying the demon. But before destroying it you must take. Atleast 2 Prayer Pots, 1 Anti-Poison Pot, Food Better than Swordies, Dueling Ring. When you wear the sigli you will be teleported into an arena with the lvl 195 demon in it. The demon is very fearce and takes over 30 off with melee and mage. So as soon as you put the sigli on make sure YOU HAVE TURN ON PROTECT FROM MAGIC. Then once you are down there either:
<br><br>
A. Mage him down using good attack spells not the low level mind runes spells.
<br><br>
B. Use a Canon. This works really work if you can protect from magic because the canon is doing all the work for you. Take about 100 canon balls just in case.
<br><br>
C. You could range him down if you are a good ranger.
<br><br>
D. Since he can take 30+ damage off with melee I wouldn't recommend going near him.
<br><br>
NOTE: If you die you loose everything except 3 items (or 4 items if u have turned on the keep extra item prayer). I recommend teleporting out of there using the dueling ring if you really have messed things up. Once you have killed the lvl 195 demon speak to the person which the arrow is pointing at. And then eventually you will be teleported to Ape Toll. Teleport to Al-Kharid using dueling ring.
<br><br>
<div data-progress>Speak to Glider in Al-Kharid to go to Tree Gnome Stronghold. Speak with King Nomad on the bottom floor to finish quest. Then speak with Daero on 1st floor to get trained in other skills. Quest Completed!</div>
<br><br>
Post-quest note: Go back and kill other monkeys (Temple, Archer, or Zombies) for their bones. Get a new Talisman (1K from Tutab in the Village Magic Shop). Take their remains to Zooknock and he will make you an additional Greegree which will change you into the form of the monkey you killed.
<br><br>
$questComplete
This quest guide was written by MuH-K0o0o. Thanks to Peloner (Complete rewrite of guide), Fireball0236, DRAVAN, Bob151jr, Im4eversmart, pokemama, bubble edie, BratDawg1, Brenden, spitfire_18, kndguild, Sonyshower, amiele, jeremy_78, Kynar, pingu head, jubala, agent929, Mosy, Wizard Bob04, Demonichell, gkef, and greatgecko for corrections.
<br><br>
This quest guide was entered into the RuneHQ.com database on Wed, Dec 08, 2004, at 08:44:11 PM by dravan and was last updated on Tue, Dec 13, 2005, at 12:37:35 AM by Fireball0236.
HTML; }