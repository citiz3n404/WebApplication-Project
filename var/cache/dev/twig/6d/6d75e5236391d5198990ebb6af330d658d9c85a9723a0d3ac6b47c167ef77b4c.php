<?php

/* FormationBundle:Default:details.html.twig */
class __TwigTemplate_89c39213665ff28146ebd81af6f109be0f192dd7a6b9d37afaf10445272ec1f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38cc5f2f9b9997e3c8548b5fda0f96d6cc0b34a3b17a2593b12734ecd702358f = $this->env->getExtension("native_profiler");
        $__internal_38cc5f2f9b9997e3c8548b5fda0f96d6cc0b34a3b17a2593b12734ecd702358f->enter($__internal_38cc5f2f9b9997e3c8548b5fda0f96d6cc0b34a3b17a2593b12734ecd702358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38cc5f2f9b9997e3c8548b5fda0f96d6cc0b34a3b17a2593b12734ecd702358f->leave($__internal_38cc5f2f9b9997e3c8548b5fda0f96d6cc0b34a3b17a2593b12734ecd702358f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cba96e7e5db19317d9a3db087c6652febc74e557bb3c9e9233a5cf73e2cee4 = $this->env->getExtension("native_profiler");
        $__internal_69cba96e7e5db19317d9a3db087c6652febc74e557bb3c9e9233a5cf73e2cee4->enter($__internal_69cba96e7e5db19317d9a3db087c6652febc74e557bb3c9e9233a5cf73e2cee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/formation/\">Back to  formation list</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationinscription", array("id" => $this->getAttribute(        // line 6
(isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        echo "\">Inscription</a>
    <h2 class=\"page-header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "title", array()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "teacher", array()), "html", null, true);
        // line 8
        echo "</small></h2>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Illustration formation</div>
                    <img class=\"card-img-top\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/formations/" . $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "img", array()))), "html", null, true);
        // line 17
        echo "\" alt=\"Card image cap\">

            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"panel panel-default\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Informations sur la formation</div>
                <table class=\"table table-striped table-bordered\">
                    <colgroup>
                        <col style=\"width:20%\">
                        <col style=\"width:80%\">
                    </colgroup>
                    <tbody>
                    <tr>
                        <th scope=\"row\">Description</th>
                        <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "begin", array()), "y-m-d"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Durée</th>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duration", array()), "html", null, true);
        echo " jours</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Status</th>
                        <td>";
        // line 45
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "locked", array())) {
            // line 46
            echo "                                Verouillée
                            ";
        } else {
            // line 48
            echo "                                Ouverte
                            ";
        }
        // line 49
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Coût</th>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "cost", array()), "html", null, true);
        echo " euros</td>
                    </tr>
                    ";
        // line 55
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
            // line 56
            echo "                    <tr>
                        <th>

                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
            echo "\">
                                <span class=\"label label-info\" >Edit</span></a>


                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
            // line 64
            echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
            // line 67
            echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>

                        </th>
                        <td></td>
                    </tr>
                    ";
        }
        // line 73
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <h2 class=\"page-header\">Paticipants</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-success\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Participants inscrits</div>
                <table class=\"table table-striped table-bordered\">
                    <colgroup>
                        <col style=\"width:10%\">
                        <col style=\"width:70%\">
                        <col style=\"width:20%\">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        ";
        // line 96
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
            // line 97
            echo "                        <th>Action</th>
                        ";
        }
        // line 99
        echo "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 103
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == true)) {
                // line 104
                echo "                            <tr>
                                <th scope=\"row\"><div class=\"littleImg\"><img src=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 106
$context["inscription"], "user", array()), "salarie", array()), "img", array()))), "html", null, true);
                // line 107
                echo "\"
                                                                            alt=\"photo\"
                                                                            style=\"margin: 0 auto;\"
                                        ></div></th>
                                <td><a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                echo "</a></td>
                                ";
                // line 112
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                    // line 113
                    echo "                                <td>

                                    ";
                    // line 115
                    if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                        // line 116
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                        // line 117
$context["inscription"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn
                                            btn-success btn-sm \"><span
                                                    class=\"fa fa-check\"
                                                    aria-hidden=\"true\"></span></a>
                                    ";
                    }
                    // line 122
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute(                    // line 123
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-danger btn-sm\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span></a>
                                </td>
                                ";
                }
                // line 126
                echo "                            </tr>
                        ";
            }
            // line 128
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"panel panel-danger\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Participants en attente de validation</div>
                <table class=\"table table-striped table-bordered\">
                    <colgroup>
                        <col style=\"width:10%\">
                        <col style=\"width:70%\">
                        <col style=\"width:20%\">
                    </colgroup>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        ";
        // line 148
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
            // line 149
            echo "                        <th>Action</th>
                        ";
        }
        // line 151
        echo "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 155
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == false)) {
                // line 156
                echo "                            <tr>
                                <th scope=\"row\"><div class=\"littleImg\"><img src=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 158
$context["inscription"], "user", array()), "salarie", array()), "img", array()))), "html", null, true);
                // line 159
                echo "\"
                                                                            alt=\"photo\"
                                                                            style=\"margin: 0 auto;\"
                                        ></div></th>
                                <td><a href=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 164
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                // line 165
                echo "</a></td>
                            ";
                // line 166
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                    // line 167
                    echo "                                <td>
                                    ";
                    // line 168
                    if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                        // line 169
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                        // line 170
$context["inscription"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn
                                            btn-success btn-sm\"><span
                                                    class=\"fa fa-check\"
                                                    aria-hidden=\"true\"></span></a>
                                    ";
                    }
                    // line 175
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute(                    // line 176
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-danger btn-sm\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span></a>
                                </td>
                                ";
                }
                // line 179
                echo "                            </tr>
                        ";
            }
            // line 181
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>



";
        
        $__internal_69cba96e7e5db19317d9a3db087c6652febc74e557bb3c9e9233a5cf73e2cee4->leave($__internal_69cba96e7e5db19317d9a3db087c6652febc74e557bb3c9e9233a5cf73e2cee4_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 182,  338 => 181,  334 => 179,  328 => 176,  326 => 175,  318 => 170,  316 => 169,  314 => 168,  311 => 167,  309 => 166,  306 => 165,  303 => 164,  301 => 163,  295 => 159,  293 => 158,  292 => 157,  289 => 156,  286 => 155,  282 => 154,  277 => 151,  273 => 149,  271 => 148,  250 => 129,  244 => 128,  240 => 126,  234 => 123,  232 => 122,  224 => 117,  222 => 116,  220 => 115,  216 => 113,  214 => 112,  208 => 111,  202 => 107,  200 => 106,  199 => 105,  196 => 104,  193 => 103,  189 => 102,  184 => 99,  180 => 97,  178 => 96,  153 => 73,  145 => 67,  143 => 66,  139 => 64,  137 => 63,  130 => 59,  125 => 56,  123 => 55,  118 => 53,  112 => 49,  108 => 48,  104 => 46,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  63 => 17,  61 => 15,  52 => 8,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="/formation/">Back to  formation list</a>*/
/*     <a class="btn btn-primary" href="{{ path('formationinscription', {'id':*/
/*         formation.id}) }}">Inscription</a>*/
/*     <h2 class="page-header">{{ formation.title }} <small>{{ formation.teacher*/
/*             }}</small></h2>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-default">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Illustration formation</div>*/
/*                     <img class="card-img-top" src="{{ asset('img/formations/' ~ formation*/
/*                     .img )*/
/*                     }}" alt="Card image cap">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-8">*/
/*             <div class="panel panel-default">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Informations sur la formation</div>*/
/*                 <table class="table table-striped table-bordered">*/
/*                     <colgroup>*/
/*                         <col style="width:20%">*/
/*                         <col style="width:80%">*/
/*                     </colgroup>*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <th scope="row">Description</th>*/
/*                         <td>{{ formation.description}}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Date</th>*/
/*                         <td>{{ formation.begin|date('y-m-d') }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Durée</th>*/
/*                         <td>{{ formation.duration }} jours</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Status</th>*/
/*                         <td>{% if formation.locked %}*/
/*                                 Verouillée*/
/*                             {% else %}*/
/*                                 Ouverte*/
/*                             {% endif %}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Coût</th>*/
/*                         <td>{{ formation.cost }} euros</td>*/
/*                     </tr>*/
/*                     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR')%}*/
/*                     <tr>*/
/*                         <th>*/
/* */
/*                             <a href="{{ path('formationedit', {'id': formation.id}) }}">*/
/*                                 <span class="label label-info" >Edit</span></a>*/
/* */
/* */
/*                             <a href="{{ path('formationlock', {'id': formation.id})*/
/*                             }}"><span class="label label-warning"><i class="fa fa-lock" aria-hidden="true"></i></span></a>*/
/* */
/*                             <a href="{{ path('formationremove', {'id': formation.id})*/
/*                             }}" ><span class="label label-danger" ><i class="fa fa-trash" aria-hidden="true"></i></span></a>*/
/* */
/*                         </th>*/
/*                         <td></td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <h2 class="page-header">Paticipants</h2>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-success">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Participants inscrits</div>*/
/*                 <table class="table table-striped table-bordered">*/
/*                     <colgroup>*/
/*                         <col style="width:10%">*/
/*                         <col style="width:70%">*/
/*                         <col style="width:20%">*/
/*                     </colgroup>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>User</th>*/
/*                         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR')%}*/
/*                         <th>Action</th>*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for inscription in inscriptions %}*/
/*                         {%  if inscription.validated == true %}*/
/*                             <tr>*/
/*                                 <th scope="row"><div class="littleImg"><img src="{{ asset*/
/*                                         ('img/users/' ~ inscription.user.salarie*/
/*                                         .img ) }}"*/
/*                                                                             alt="photo"*/
/*                                                                             style="margin: 0 auto;"*/
/*                                         ></div></th>*/
/*                                 <td><a href="{{ path('profiluser', {'id': inscription.user.id })  }}"> {{ inscription.user.username }}</a></td>*/
/*                                 {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR')%}*/
/*                                 <td>*/
/* */
/*                                     {%  if inscription.validated != true %}*/
/*                                         <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                             inscription.id }) }}"class="btn*/
/*                                             btn-success btn-sm "><span*/
/*                                                     class="fa fa-check"*/
/*                                                     aria-hidden="true"></span></a>*/
/*                                     {% endif %}*/
/*                                     <a href="{{ path*/
/*                                     ('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger btn-sm"><span class="fa fa-times" aria-hidden="true"></span></a>*/
/*                                 </td>*/
/*                                 {% endif %}*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/*             <div class="panel panel-danger">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Participants en attente de validation</div>*/
/*                 <table class="table table-striped table-bordered">*/
/*                     <colgroup>*/
/*                         <col style="width:10%">*/
/*                         <col style="width:70%">*/
/*                         <col style="width:20%">*/
/*                     </colgroup>*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>User</th>*/
/*                         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR')%}*/
/*                         <th>Action</th>*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for inscription in inscriptions %}*/
/*                         {% if inscription.validated == false %}*/
/*                             <tr>*/
/*                                 <th scope="row"><div class="littleImg"><img src="{{ asset*/
/*                                         ('img/users/' ~ inscription.user.salarie*/
/*                                         .img ) }}"*/
/*                                                                             alt="photo"*/
/*                                                                             style="margin: 0 auto;"*/
/*                                         ></div></th>*/
/*                                 <td><a href="{{ path('profiluser', {'id': inscription*/
/*                                         .user.id })   }}"> {{ inscription.user.username*/
/*                                         }}</a></td>*/
/*                             {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR')%}*/
/*                                 <td>*/
/*                                     {%  if inscription.validated != true %}*/
/*                                         <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                             inscription.id }) }}"class="btn*/
/*                                             btn-success btn-sm"><span*/
/*                                                     class="fa fa-check"*/
/*                                                     aria-hidden="true"></span></a>*/
/*                                     {% endif %}*/
/*                                     <a href="{{ path*/
/*                                     ('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger btn-sm"><span class="fa fa-times" aria-hidden="true"></span></a>*/
/*                                 </td>*/
/*                                 {% endif %}*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
