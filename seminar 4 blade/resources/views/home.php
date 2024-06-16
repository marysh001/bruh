namespace App\View\Components;
use Illuminate\View\Component;
class header extends Component
{
public $text;
public function __construct($worker)
{
$this->text = $worker;
}

pubic function render()
{
return view(view:'components.header');
}
}
