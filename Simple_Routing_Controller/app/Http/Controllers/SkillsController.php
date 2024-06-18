<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function mySkills(){

        return view('skills')
                ->with('first' , 'Teamwork skills – getting along with others')
                ->with('second' , 'Knowledgeable in programming/scripting language: Python, HTML, CSS, Java, SQL, SAP ABAP')
                ->with('third' , 'Knowledgeable in Microsoft Word, Microsoft PowerPoint, and Microsoft Excel')
                ->with('fourth' , 'Knowledgeable in using Figma')
                ->with('fifth' , 'Ability to maintain a high level of confidentiality')
                ->with('sixth' , 'Willingness to learn new things')
                ->with('seventh' , 'Flexible individual and team player who functions well in a fast-paced work environment');
    }
}