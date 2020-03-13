<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\coursecharts;
use App\Charts\coursecharts2;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cursos = count(DB::select("SELECT * FROM mdl_course t1 WHERE  SUBSTRING(t1.idnumber, 1, 6) = '202001' AND t1.id"));
        $cursosact = count(DB::select("SELECT fullname FROM mdl_course as t1 WHERE  SUBSTRING(t1.idnumber, 1, 6) = '202001' AND t1.id IN (SELECT DISTINCT t3.id  FROM mdl_role_assignments t1 INNER JOIN mdl_context t2 ON t1.contextid = t2.id INNER JOIN mdl_course t3 ON t2.instanceid = t3.id AND t1.roleid = 5)"));
        $cursosinact = count(DB::select("SELECT DISTINCT t3.id FROM mdl_role_assignments t1 INNER JOIN mdl_context t2 ON t1.contextid = t2.id INNER JOIN mdl_course t3 ON t2.instanceid = t3.id AND t1.roleid = 5 AND t3.id NOT IN (SELECT DISTINCT t3.id FROM mdl_role_assignments t1 INNER JOIN mdl_context t2 ON t1.contextid = t2.id
          INNER JOIN mdl_course t3 ON t2.instanceid = t3.id AND t1.roleid = 3)"));


        $cursosconestruc = count(DB::select("SELECT * FROM mdl_course mc WHERE SUBSTRING(mc.idnumber, 1, 6) = '202001' AND mc.id IN (SELECT DISTINCT t3.id FROM mdl_grade_categories t1 INNER JOIN mdl_grade_items t2 ON t1.courseid = t2.categoryid INNER JOIN mdl_course t3 ON t2.categoryid = t3.id AND t1.parent )"));
        $cursossinestruc = count(DB::select("SELECT * FROM mdl_course mc WHERE SUBSTRING(mc.idnumber, 1, 6) = '202001' AND mc.id IN (SELECT DISTINCT t3.id FROM mdl_grade_categories t1 INNER JOIN mdl_grade_items t2 ON t1.courseid = t2.categoryid INNER JOIN mdl_course t3 ON t2.categoryid = t3.id AND t1.fullname = '?')"));




        $porcursosact = ($cursosact * 100)/$cursos;

        $porcursosinact = ($cursosinact * 100)/$cursos;


        $chart = new coursecharts;
        $chart->labels(['Cursos']);
        $chart->dataset('Activos', 'bar', [$cursosact,])
        ->backgroundColor(['#28a745'])
        ->color('#190707')
        ;
        $chart->dataset('Inactivos', 'bar', [$cursosinact])
        ->backgroundColor(['#ffc107'])
        ->color('#190707')
        ;

        $chart->dataset('Con Estructuras', 'bar', [$cursosconestruc])
        ->backgroundColor(['#dc3545'])
        ->color('#190707')
        ;

        $chart->dataset('Sin Estructuras', 'bar', [$cursossinestruc])
        ->backgroundColor(['#343a40'])
        ->color('#190707')
        ;

        // $chart->dataset('DataSet', 'polarArea',($nn2))
        // ->color('#190707')
        // ->backgroundColor(['#'.$color,'#'.$color2])
        // ;


        return view('home', compact('cursosact','cursosinact','cursos','porcursosact','porcursosinact','chart','cursosconestruc','cursossinestruc'));
    }
}
