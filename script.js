var guys = {
	"shauni": "http://steamcommunity.com/profiles/76561198319960482",
	"cloud": "http://steamcommunity.com/profiles/76561197966991267",
	"kosta": "http://steamcommunity.com/profiles/76561198370109289",
	"aiseu": "http://steamcommunity.com/profiles/76561198332099066",
	"heart": "http://steamcommunity.com/profiles/76561197960378249",
	"plopp": "http://steamcommunity.com/profiles/76561198195043517",
	"clue": "http://steamcommunity.com/profiles/76561198241213964"
}

var marquee = document.getElementsByClassName("js-marquee")[0];

for (var guy in guys)
{
	var node = document.createElement("a");
	var text = document.createTextNode(guy);

	node.appendChild(text);
	node.href = guys[guy];
	node.target = "_blank";
	marquee.appendChild(node);

	var keys = Object.keys(guys);
	if (guy != keys[keys.length - 1])
		marquee.innerHTML += ' - ';
}

var center = document.getElementById("center");