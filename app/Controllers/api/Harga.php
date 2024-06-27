namespace App\Controllers;

use App\Models\KamarModel;
use CodeIgniter\API\ResponseTrait;

class Harga extends BaseController
{
    use ResponseTrait;

    public function getHarga($id)
    {
        $model = new KamarModel();
        $harga = $model->find($id);

        if ($harga) {
            return $this->response->setJSON($harga);
        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Data not found']);
        }
    }
}
