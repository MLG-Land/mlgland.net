&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;UTF-8&quot; /&gt;
		&lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot; /&gt;
		&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot; /&gt;
		&lt;title&gt;MLG LAND&lt;/title&gt;
		&lt;!-- import css --&gt;
		&lt;link rel=&quot;stylesheet&quot; href=&quot;style.css&quot; /&gt;
		&lt;!-- import javascript --&gt;
		&lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
		&lt;meta name=&quot;description&quot; content=&quot;MLG Land Minecraft server&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div class=&quot;container&quot;&gt;
			&lt;div class=&quot;header&quot; w3-include-html=&quot;/header.html&quot;&gt;&lt;/div&gt;
			&lt;script&gt;
				function includeHTML() {
    var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName(&quot;*&quot;);
    for (i = 0; i &lt; z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute(&quot;w3-include-html&quot;);
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = &quot;Page not found.&quot;;}
          /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute(&quot;w3-include-html&quot;);
            includeHTML();
        }
        } 
        xhttp.open(&quot;GET&quot;, file, true);
        xhttp.send();
      /* Exit the function: */
        return;
    }
    }
}
				includeHTML();
			&lt;/script&gt;
			&lt;div class=&quot;banner&quot;&gt;
				&lt;a
					href=&quot;https://minecraftservers.org/server/635055&quot;
					target=&quot;_blank&quot;
					&gt;&lt;img
						src=&quot;https://status.minecraftservers.org/classic/635055.png&quot;
						alt=&quot;MLG Land Minecraft server&quot;
						width=&quot;540&quot;
						height=&quot;90&quot;
				/&gt;&lt;/a&gt;
			&lt;/div&gt;
			&lt;div class=&quot;alerts&quot;&gt;
				&lt;h2&gt;Alerts&lt;/h2&gt;
				&lt;h3 id=&quot;latest-alerts&quot;&gt;
					&lt;!-- we will use javascript to get the file ./updates.txt, and then we will display it --&gt;
					&lt;!-- &lt;script src=&quot;./alerts.js&quot;&gt;&lt;/script&gt; --&gt;

					&lt;!-- Get content from ./alerts.txt and display them on screen with php --&gt;
					&lt;!-- Only display the first 3 alerts --&gt;
					&lt;?php
						$alerts = file_get_contents(&quot;./alertsystem/alerts.txt&quot;);
						$alerts = explode(&quot;\n&quot;, $alerts);
						$alerts = array_slice($alerts, 0, 3);
						foreach ($alerts as $alert) {
							echo &quot;&lt;p&gt;$alert&lt;/p&gt;&quot;;
						}
					?&gt;
				&lt;/h3&gt;
			&lt;/div&gt;
			&lt;div class=&quot;updates&quot;&gt;
				&lt;h2&gt;Updates&lt;/h2&gt;
				&lt;h3 id=&quot;latest-updates&quot;&gt;
					&lt;!-- we will use javascript to get the file ./updates.txt, and then we will display it --&gt;
					&lt;!-- &lt;script src=&quot;./updates.js&quot;&gt;&lt;/script&gt; --&gt;
					
					&lt;!-- Get content from ./updates.txt and display them on screen with php --&gt;
					&lt;!-- Only display the first 5 updates --&gt;
					&lt;?php
						$updates = file_get_contents(&quot;./alertsystem/updates.txt&quot;);
						$updates = explode(&quot;\n&quot;, $updates);
						$updates = array_slice($updates, 0, 5);
						foreach ($updates as $update) {
							echo &quot;&lt;p&gt;$update&lt;/p&gt;&quot;;
						}
					?&gt;
				&lt;/h3&gt;
			&lt;/div&gt;
			&lt;div id=&quot;profiles&quot;&gt;
				&lt;div class=&quot;card&quot;&gt;
					&lt;img src=&quot;https://s.namemc.com/2d/skin/face.png?id=172430617ff299db&amp;scale=4&quot; alt=&quot;Avatar&quot; style=&quot;width:100%&quot;&gt;
					&lt;div class=&quot;card-container&quot;&gt;
						&lt;h4&gt;&lt;b&gt;SidGames5&lt;/b&gt;&lt;/h4&gt;&lt;br&gt; 
						&lt;p&gt;Server Owner&lt;/p&gt;&lt;br&gt;
						&lt;a href=&quot;http://basiccorruption.github.io&quot; target=&quot;_blank&quot;&gt;&lt;button&gt;Website&lt;/button&gt;&lt;/a&gt;
						&lt;a href=&quot;https://www.youtube.com/c/SidGames5&quot; target=&quot;_blank&quot;&gt;&lt;button&gt;YouTube&lt;/button&gt;&lt;/a&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;card&quot;&gt;
					&lt;img src=&quot;https://s.namemc.com/2d/skin/face.png?id=abcd21292b33e322&amp;scale=4&quot; alt=&quot;Avatar&quot; style=&quot;width:100%&quot;&gt;
					&lt;div class=&quot;card-container&quot;&gt;
						&lt;h4&gt;&lt;b&gt;AnotherSlime&lt;/b&gt;&lt;/h4&gt; &lt;br&gt;
						&lt;p&gt;Moderator/Developer&lt;/p&gt;&lt;br&gt;
						&lt;a href=&quot;https://nathanchu.com&quot; target=&quot;_blank&quot;&gt;&lt;button&gt;Website&lt;/button&gt;&lt;/a&gt;&lt;br&gt;
						&lt;button disabled=&quot;disabled&quot;&gt;⠀&lt;/button&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;card&quot;&gt;
					&lt;img src=&quot;https://s.namemc.com/2d/skin/face.png?id=d33d868914d3fdf5&amp;scale=4&quot; alt=&quot;Avatar&quot; style=&quot;width:100%&quot;&gt;
					&lt;div class=&quot;card-container&quot;&gt;
						&lt;h4&gt;&lt;b&gt;SuperBoyThomas6&lt;/b&gt;&lt;/h4&gt;&lt;br&gt;
						&lt;p&gt;Moderator&lt;/p&gt;&lt;br&gt;
						&lt;button disabled=&quot;disabled&quot;&gt;⠀&lt;/button&gt;&lt;br&gt;
						&lt;button disabled=&quot;disabled&quot;&gt;⠀&lt;/button&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;card&quot;&gt;
					&lt;img src=&quot;https://s.namemc.com/2d/skin/face.png?id=2c606a3efd995e10&amp;scale=4&quot; alt=&quot;Avatar&quot; style=&quot;width:100%&quot;&gt;
					&lt;div class=&quot;card-container&quot;&gt;
						&lt;h4&gt;&lt;b&gt;TheTrue_Gamer&lt;/b&gt;&lt;/h4&gt;&lt;br&gt;
						&lt;p&gt;Builder&lt;/p&gt;&lt;br&gt;
						&lt;a href=&quot;https://www.youtube.com/channel/UC5PSoyVvlZtmbCq58gcIZGQ&quot; target=&quot;_blank&quot;&gt;&lt;button&gt;YouTube&lt;/button&gt;&lt;/a&gt;&lt;br&gt;
						&lt;button disabled=&quot;disabled&quot;&gt;⠀&lt;/button&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;card&quot;&gt;
					&lt;img src=&quot;https://s.namemc.com/2d/skin/face.png?id=62ea6be80cca0790&amp;scale=4&quot; alt=&quot;Avatar&quot; style=&quot;width:100%&quot;&gt;
					&lt;div class=&quot;card-container&quot;&gt;
						&lt;h4&gt;&lt;b&gt;LeW0lfYT&lt;/b&gt;&lt;/h4&gt;&lt;br&gt;
						&lt;p&gt;Builder&lt;/p&gt;&lt;br&gt;
						&lt;a href=&quot;http://lewolfyt.github.io&quot; target=&quot;_blank&quot;&gt;&lt;button&gt;Website&lt;/button&gt;&lt;/a&gt;
						&lt;a href=&quot;https://www.youtube.com/channel/UCzkLUvKWvA1ROoYFgQr0mJw&quot; target=&quot;_blank&quot;&gt;&lt;button&gt;YouTube&lt;/button&gt;&lt;/a&gt;
					&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/body&gt;
&lt;/html&gt;
