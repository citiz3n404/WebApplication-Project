<?php

/* AnnuaireBundle:Default:payslip.html.twig */
class __TwigTemplate_bc90585007e594a3f28ec16bb9f3e2d5f641a00c5261cb3ab1d08bb5203accc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c44844e881860349e0c817099bea6ebdf5cf9e51ba9ca07ed2b8f2ab2256271a = $this->env->getExtension("native_profiler");
        $__internal_c44844e881860349e0c817099bea6ebdf5cf9e51ba9ca07ed2b8f2ab2256271a->enter($__internal_c44844e881860349e0c817099bea6ebdf5cf9e51ba9ca07ed2b8f2ab2256271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:payslip.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_c44844e881860349e0c817099bea6ebdf5cf9e51ba9ca07ed2b8f2ab2256271a->leave($__internal_c44844e881860349e0c817099bea6ebdf5cf9e51ba9ca07ed2b8f2ab2256271a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_34dc2a8ee9a2bff241344b420b4df0badf8f5bba4a7cbf0178cd4da150c8cb3f = $this->env->getExtension("native_profiler");
        $__internal_34dc2a8ee9a2bff241344b420b4df0badf8f5bba4a7cbf0178cd4da150c8cb3f->enter($__internal_34dc2a8ee9a2bff241344b420b4df0badf8f5bba4a7cbf0178cd4da150c8cb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "  <style type=\"text/css\">
  th
  {
    padding-right: 30px;
    padding-left: 10px;
  }

  table
  {
    padding-bottom: 5px;
  }

  ul
  {
      list-style: none;
  }

  li
  {
      padding: 2px;
  }



  </style>
  <page backtop=\"50px\" backright=\"50px\" backleft=\"50px\">
    <div align=\"center\">
    <img alt=\"Brand\" src=\".";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoaigle.png"), "html", null, true);
        echo "\"><h2>Bulletin de paie ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", " m/Y"), "html", null, true);
        echo "</h2>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class=\"col-md-8\">
        <div class=\"panel panel-primary\" >
            <div class=\"panel-body\">

            <fieldset>
              <legend style=\"background-color: white; border: solid 2px white\">Employeur : National Security Zero</legend>
              <table class=\"table\">
                <tbody >
                <tr>
                    <th scope=\"row\">Adresse de l'établissement</th>
                    <td>42 rue des noises - Zone 51, UNITED STATES OF NOWHERE</td>
                </tr>
                <tr>
                    <th scope=\"row\">N° SIRET</th>
                    <td>10011011010101</td>
                </tr>
                </tbody>
              </table>
            </fieldset>

            </div>
        </div>
    </div>
    <br/>
    <br/>
    <div class=\"col-md-8\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-body\">
            <fieldset>
              <legend style=\"background-color: white; border: solid 2px white\">Salarié</legend>
              <table class=\"table\">
                <tbody>
                <tr>
                    <th scope=\"row\">Nom</th>
                    <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "nom", array())), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">Prénom</th>
                    <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "prenom", array())), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">Matricule</th>
                    <td>";
        // line 77
        echo twig_escape_filter($this->env, (twig_random($this->env, 89999) + 10000), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">N° de sécurité sociale</th>
                    <td>";
        // line 81
        echo twig_escape_filter($this->env, (twig_random($this->env, 99999) + 1), "html", null, true);
        echo twig_escape_filter($this->env, (twig_random($this->env, 99999) + 1), "html", null, true);
        echo twig_escape_filter($this->env, (twig_random($this->env, 9999) + 1), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th scope=\"row\">Adresse</th>
                    <td>Goulag des employés sages – Moscou, Russie</td>
                </tr>
                </tbody>
              </table>
              </fieldset>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <div class=\"col-md-8\">
        <div class=\"panel panel-primary\">
            <div class=\"panel-body\">
            <fieldset>
              <legend style=\"background-color: white; border: solid 2px white\"> Salaire mensuel </legend>
              <table class=\"table\">
                <tbody>
                <tr>
                    <th scope=\"row\">Rémunération brute</th>
                    <td>";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()), "html", null, true);
        echo " € </td>
                </tr>
                <tr>
                    <th scope=\"row\">
                      Cotisations sociales
                      <ul class=\"ul1\">
                        <li>Maladie</li>
                        <li>Chomage</li>
                        <li>Vieillesse</li>
                        <li>Retraite compl.</li>
                      </ul>
                    </th>
                    <td style=\"overflow: visible\">
                      ";
        // line 117
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) * ((((isset($context["maladie"]) ? $context["maladie"] : $this->getContext($context, "maladie")) + (isset($context["retraite"]) ? $context["retraite"] : $this->getContext($context, "retraite"))) + (isset($context["chomage"]) ? $context["chomage"] : $this->getContext($context, "chomage"))) + (isset($context["vieillesse"]) ? $context["vieillesse"] : $this->getContext($context, "vieillesse")))), 2, "common"), "html", null, true);
        echo " €
                      <ul class=\"ul2\">
                        <li>";
        // line 119
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) * (isset($context["maladie"]) ? $context["maladie"] : $this->getContext($context, "maladie"))), 2, "common"), "html", null, true);
        echo "€</li>
                        <li>";
        // line 120
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) * (isset($context["chomage"]) ? $context["chomage"] : $this->getContext($context, "chomage"))), 2, "common"), "html", null, true);
        echo "€</li>
                        <li>";
        // line 121
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) * (isset($context["vieillesse"]) ? $context["vieillesse"] : $this->getContext($context, "vieillesse"))), 2, "common"), "html", null, true);
        echo "€</li>
                        <li>";
        // line 122
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) * (isset($context["retraite"]) ? $context["retraite"] : $this->getContext($context, "retraite"))), 2, "common"), "html", null, true);
        echo "€</li>
                      </ul>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Rémunération nette</th>
                    <td>";
        // line 128
        echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) - ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "salarie", array()), "salaire", array()) * ((((isset($context["maladie"]) ? $context["maladie"] : $this->getContext($context, "maladie")) + (isset($context["retraite"]) ? $context["retraite"] : $this->getContext($context, "retraite"))) + (isset($context["chomage"]) ? $context["chomage"] : $this->getContext($context, "chomage"))) + (isset($context["vieillesse"]) ? $context["vieillesse"] : $this->getContext($context, "vieillesse"))))), 2, "common"), "html", null, true);
        echo " € </td>
                </tr>
                </tbody>
              </table>
            </fieldset>
            </div>
        </div>
    </div>
  </page>
";
        
        $__internal_34dc2a8ee9a2bff241344b420b4df0badf8f5bba4a7cbf0178cd4da150c8cb3f->leave($__internal_34dc2a8ee9a2bff241344b420b4df0badf8f5bba4a7cbf0178cd4da150c8cb3f_prof);

    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Default:payslip.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  200 => 128,  191 => 122,  187 => 121,  183 => 120,  179 => 119,  174 => 117,  158 => 104,  130 => 81,  123 => 77,  116 => 73,  109 => 69,  64 => 29,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/*   <style type="text/css">*/
/*   th*/
/*   {*/
/*     padding-right: 30px;*/
/*     padding-left: 10px;*/
/*   }*/
/* */
/*   table*/
/*   {*/
/*     padding-bottom: 5px;*/
/*   }*/
/* */
/*   ul*/
/*   {*/
/*       list-style: none;*/
/*   }*/
/* */
/*   li*/
/*   {*/
/*       padding: 2px;*/
/*   }*/
/* */
/* */
/* */
/*   </style>*/
/*   <page backtop="50px" backright="50px" backleft="50px">*/
/*     <div align="center">*/
/*     <img alt="Brand" src=".{{ asset('img/logoaigle.png') }}"><h2>Bulletin de paie {{ 'now'|date(' m/Y') }}</h2>*/
/*     </div>*/
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/*     <div class="col-md-8">*/
/*         <div class="panel panel-primary" >*/
/*             <div class="panel-body">*/
/* */
/*             <fieldset>*/
/*               <legend style="background-color: white; border: solid 2px white">Employeur : National Security Zero</legend>*/
/*               <table class="table">*/
/*                 <tbody >*/
/*                 <tr>*/
/*                     <th scope="row">Adresse de l'établissement</th>*/
/*                     <td>42 rue des noises - Zone 51, UNITED STATES OF NOWHERE</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">N° SIRET</th>*/
/*                     <td>10011011010101</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*             </fieldset>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br/>*/
/*     <br/>*/
/*     <div class="col-md-8">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-body">*/
/*             <fieldset>*/
/*               <legend style="background-color: white; border: solid 2px white">Salarié</legend>*/
/*               <table class="table">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <th scope="row">Nom</th>*/
/*                     <td>{{ user.salarie.nom|upper }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">Prénom</th>*/
/*                     <td>{{ user.salarie.prenom|capitalize }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">Matricule</th>*/
/*                     <td>{{random(89999)+10000}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">N° de sécurité sociale</th>*/
/*                     <td>{{random(99999)+1}}{{random(99999)+1}}{{random(9999)+1}}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">Adresse</th>*/
/*                     <td>Goulag des employés sages – Moscou, Russie</td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*               </fieldset>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <br/>*/
/*     <br/>*/
/*     <div class="col-md-8">*/
/*         <div class="panel panel-primary">*/
/*             <div class="panel-body">*/
/*             <fieldset>*/
/*               <legend style="background-color: white; border: solid 2px white"> Salaire mensuel </legend>*/
/*               <table class="table">*/
/*                 <tbody>*/
/*                 <tr>*/
/*                     <th scope="row">Rémunération brute</th>*/
/*                     <td>{{ user.salarie.salaire }} € </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">*/
/*                       Cotisations sociales*/
/*                       <ul class="ul1">*/
/*                         <li>Maladie</li>*/
/*                         <li>Chomage</li>*/
/*                         <li>Vieillesse</li>*/
/*                         <li>Retraite compl.</li>*/
/*                       </ul>*/
/*                     </th>*/
/*                     <td style="overflow: visible">*/
/*                       {{ (user.salarie.salaire*(maladie+retraite+chomage+vieillesse))|round(2, 'common') }} €*/
/*                       <ul class="ul2">*/
/*                         <li>{{(user.salarie.salaire*maladie)|round(2,'common')}}€</li>*/
/*                         <li>{{(user.salarie.salaire*chomage)|round(2,'common')}}€</li>*/
/*                         <li>{{(user.salarie.salaire*vieillesse)|round(2,'common')}}€</li>*/
/*                         <li>{{(user.salarie.salaire*retraite)|round(2,'common')}}€</li>*/
/*                       </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th scope="row">Rémunération nette</th>*/
/*                     <td>{{ (user.salarie.salaire - (user.salarie.salaire * (maladie+retraite+chomage+vieillesse)))|round(2, 'common') }} € </td>*/
/*                 </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*             </fieldset>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*   </page>*/
/* {% endblock %}*/
/* */
