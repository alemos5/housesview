<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFavoritosRequest;
use App\Http\Requests\UpdateFavoritosRequest;
use App\Models\Favoritos;
use App\Repositories\FavoritosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use Auth;
use DB;

class FavoritosController extends AppBaseController
{
    /** @var  FavoritosRepository */
    private $favoritosRepository;

    public function __construct(FavoritosRepository $favoritosRepo)
    {
        $this->favoritosRepository = $favoritosRepo;
    }

    /**
     * Display a listing of the Favoritos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->favoritosRepository->pushCriteria(new RequestCriteria($request));
        $favoritos = $this->favoritosRepository->all();

        return view('favoritos.index')
            ->with('favoritos', $favoritos);
    }

    /**
     * Show the form for creating a new Favoritos.
     *
     * @return Response
     */
    public function create()
    {
        return view('favoritos.create');
    }

    /**
     * Store a newly created Favoritos in storage.
     *
     * @param CreateFavoritosRequest $request
     *
     * @return Response
     */
    public function store(CreateFavoritosRequest $request)
    {
        $input = $request->all();

        $favoritos = $this->favoritosRepository->create($input);

        Flash::success('Favoritos saved successfully.');

        return redirect(route('favoritos.index'));
    }

    /**
     * Display the specified Favoritos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $favoritos = $this->favoritosRepository->findWithoutFail($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        return view('favoritos.show')->with('favoritos', $favoritos);
    }

    /**
     * Show the form for editing the specified Favoritos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $favoritos = $this->favoritosRepository->findWithoutFail($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        return view('favoritos.edit')->with('favoritos', $favoritos);
    }

    /**
     * Update the specified Favoritos in storage.
     *
     * @param  int              $id
     * @param UpdateFavoritosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFavoritosRequest $request)
    {
        $favoritos = $this->favoritosRepository->findWithoutFail($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        $favoritos = $this->favoritosRepository->update($request->all(), $id);

        Flash::success('Favoritos updated successfully.');

        return redirect(route('favoritos.index'));
    }

    /**
     * Remove the specified Favoritos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $favoritos = $this->favoritosRepository->findWithoutFail($id);

        if (empty($favoritos)) {
            Flash::error('Favoritos not found');

            return redirect(route('favoritos.index'));
        }

        $this->favoritosRepository->delete($id);

        Flash::success('Favoritos deleted successfully.');

        return redirect(route('favoritos.index'));
    }

    public function addFavorito()
    {
        $propiedad_id = $_POST['id'];
        $action = $_POST['acction'];

        if ($action == 1) {
            $favorito = new Favoritos;
            $favorito->propiedad_id = $propiedad_id;
            $favorito->user_id = Auth::id();
            $favorito->save();
            ?>
            <font color="red">
                <i style="cursor: pointer" onclick="addFavorito(<?php echo $propiedad_id; ?>, 0)" class="fas fa-heart"></i>
            </font>
            <?php
        }else{
            Favoritos::where('propiedad_id', '=', $propiedad_id)->delete();
            ?>
            <font color="red">
                <i style="cursor: pointer" onclick="addFavorito(<?php echo $propiedad_id; ?>, 1)" class="far fa-heart"></i>
            </font>
            <?php
        }

    }

    public static function getFavoritoPersonal($propiedad_id)
    {
        $favorito = Favoritos::where('propiedad_id', '=', $propiedad_id)
            ->where('user_id', '=', Auth::id())
            ->get();
//        echo json_encode($favorito); die();
//        echo count($favorito); die();
        if(count($favorito) > 0){
//            die("true");
            return true;
        }
//        die("false");
        return false;
    }

    public function user()
    {
        $favoritos = Favoritos::where('user_id', '=', Auth::id())->groupBy('propiedad_id')->get();
//        echo json_encode($favoritos); die();
        $data = [];
        foreach ($favoritos as $favorito) {
            $data[] = $this->getIDPropiedad($favorito->propiedad_id);
        }
//        echo json_encode($data); die();
        return view('favoritos.user')->with('favoritos', $data);

    }

    public function getIDPropiedad($id) {
        $propiedad = DB::select('
            SELECT a.*, b.provincia, c.localidad, d.nombre FROM propiedades a
                LEFT JOIN provincias b ON (a.provincias_id = b.id)
                LEFT JOIN localidades c ON (a.localidads_id = c.id)
                LEFT JOIN clientes d ON (a.user_id = d.id_cliente)
            WHERE 
                a.id = '.$id.'
        ');
//        echo json_encode($propiedad); die();
        $data = array(
            'data'      => $propiedad,
            'amenities' => $this->getAmenities($propiedad[0]->id)
        );
        return $data;

    }

    public function getAmenities($propiedad_id) {
        $propiedades = DB::select('
            SELECT a.id, a.propiedad_eav_id as id_eav, c.grupo, b.attribute, b.icon, a.cantidad FROM propiedad_eav_value a
            LEFT JOIN propiedad_eavs b ON (a.propiedad_eav_id = b.id)
            LEFT JOIN propiedad_grupos c ON (b.grupo_id = c.id)
            WHERE a.propiedad_id = '.$propiedad_id.'
        ');
        return $propiedades;
    }


}
