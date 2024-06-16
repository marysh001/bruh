use Illuminate\Http\Request;

class EntityController extends Controller
{
//
protected $users = [ 'user1','user2', 'user3'];
public function index()
{
return view('users',['users' => $this->users]);
}

public function delete($id)
{
if (array_key_exists($id, $this->users)){
unset($this->users[$id]);
}
return view('users',['users' => $this->users]);
}

public function store(Request $request)
{if($request->user_email){
$this->users[] = $request->user_email;
}
return view('users',['users' =>$this->users]);
}
}
