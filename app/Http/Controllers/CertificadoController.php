<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPJasper\PHPJasper;
use App\Customer;

class CertificadoController extends Controller
{
    public function getDatabaseConfig()
    {
        return [
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'port'     => '5432',
            'username' => 'postgres',
            'password' => 'postgres',
            'database' => 'acad',
            'jdbc_dir' => base_path() . env('JDBC_DIR', '/vendor/lavela/phpjasper/src/JasperStarter/jdbc'),
            'jdbc_driver' => 'org.postgresql.Driver',
            'jdbc_url' => 'jdbc:postgresql://localhost:5432/acad',

        ];
            
    }

    public function emitir($id_aluno)
    {
        $nome_arquivo =  'certificado'  . time();
       
        $input = base_path() . '/certificados/certificado_acad.jasper';   
        $output = base_path('/public/reports/'.$nome_arquivo); 
        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => ['aluno_id' => $id_aluno],
            'db_connection' => [
                'driver' => 'postgres', //mysql, ....
                'username' => 'postgres',
                'password' => 'postgres',
                'host' => 'localhost',
                'database' => 'acad',
                'port' => '5432'
            ]
        ];
                
               $report = new PHPJasper;
               
               $report->compile(storage_path('app/public'). '/reports/modelos/certificado_acad.jrxml')->execute();


               $report->process(
                storage_path('app/public/reports/modelos/certificado_acad.jasper') ,
                $output,
                $options
               )->execute();
                
               $arquivo = $output . '.pdf';
               $path = $arquivo;
            
               if (!file_exists($arquivo)) {
                  abort(404);
               }
               $arquivo = file_get_contents($arquivo);
               unlink($path);

               return response($arquivo, 200)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'inline; arquivoname="certificado.pdf"');
     
    }
       
               
            
}        
