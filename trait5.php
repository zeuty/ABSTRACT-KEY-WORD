<?

//Èññïîëüçîâàíèå òðåéòà äëÿ ÐÅÀËÈÇÀÖÈÈ ÈÍÒÅÐÔÅÉÑÀ

trait Lg{
	public function lg(){echo "Ïîêàçûâàþ êàðòèíêó î÷åíü êà÷åñòâåíîî !!!! Î×ÅÍÜ !!!";}
} 


interface Pc{
	public function monitor();
	}
	
class Custom_pc implements Pc{
	use Lg{Lg::lg as monitor;}
}

$celeron333 = new Custom_pc;
$celeron333->monitor();