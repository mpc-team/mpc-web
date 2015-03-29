SELECT tm.fthreadID, tmi.author, tmi.tstamp
FROM ThreadMessageInfo AS tmi
	JOIN ThreadMessages AS tm
		ON tmi.tmsgID=tm.tmsgID
WHERE tmi.tstamp=(
	SELECT MAX(tstamp) 
	FROM ThreadMessageInfo AS tmi2	
		JOIN ThreadMessages AS tm2
			ON tmi2.tmsgID=tm2.tmsgID
	WHERE tm2.fthreadID=tm.fthreadID
)