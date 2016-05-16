<?php

/* FormationBundle:Default:details.html.twig */
class __TwigTemplate_185f3ac785256eb6fcbefca99b2de2c02a0ffef80003d3cf68510e0949cef398 extends Twig_Template
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
        $__internal_31e0a91349c1a69f8a2658dc96a750364893a53b854ad389a3cbcbdeb50f1bb0 = $this->env->getExtension("native_profiler");
        $__internal_31e0a91349c1a69f8a2658dc96a750364893a53b854ad389a3cbcbdeb50f1bb0->enter($__internal_31e0a91349c1a69f8a2658dc96a750364893a53b854ad389a3cbcbdeb50f1bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e0a91349c1a69f8a2658dc96a750364893a53b854ad389a3cbcbdeb50f1bb0->leave($__internal_31e0a91349c1a69f8a2658dc96a750364893a53b854ad389a3cbcbdeb50f1bb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01649bb600dc0636ebde7c449e3bde1d6ee74b448459bd4ffbb4b27aa48a2ad4 = $this->env->getExtension("native_profiler");
        $__internal_01649bb600dc0636ebde7c449e3bde1d6ee74b448459bd4ffbb4b27aa48a2ad4->enter($__internal_01649bb600dc0636ebde7c449e3bde1d6ee74b448459bd4ffbb4b27aa48a2ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 103
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == true)) {
                // line 104
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                <td><a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                echo "</a></td>
                                ";
                // line 107
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                    // line 108
                    echo "                                <td>

                                    ";
                    // line 110
                    if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                        // line 111
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                        // line 112
$context["inscription"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn
                                            btn-success btn-sm \"><span
                                                    class=\"fa fa-check\"
                                                    aria-hidden=\"true\"></span></a>
                                    ";
                    }
                    // line 117
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute(                    // line 118
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-danger btn-sm\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span></a>
                                </td>
                                ";
                }
                // line 121
                echo "                            </tr>
                        ";
            }
            // line 123
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
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
        // line 143
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
            // line 144
            echo "                        <th>Action</th>
                        ";
        }
        // line 146
        echo "                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 150
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == false)) {
                // line 151
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                <td><a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 154
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                // line 155
                echo "</a></td>
                            ";
                // line 156
                if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_FORMATEUR"))) {
                    // line 157
                    echo "                                <td>
                                    ";
                    // line 158
                    if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                        // line 159
                        echo "                                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                        // line 160
$context["inscription"], "id", array()))), "html", null, true);
                        echo "\"class=\"btn
                                            btn-success btn-sm\"><span
                                                    class=\"fa fa-check\"
                                                    aria-hidden=\"true\"></span></a>
                                    ";
                    }
                    // line 165
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute(                    // line 166
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-danger btn-sm\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span></a>
                                </td>
                                ";
                }
                // line 169
                echo "                            </tr>
                        ";
            }
            // line 171
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>



";
        
        $__internal_01649bb600dc0636ebde7c449e3bde1d6ee74b448459bd4ffbb4b27aa48a2ad4->leave($__internal_01649bb600dc0636ebde7c449e3bde1d6ee74b448459bd4ffbb4b27aa48a2ad4_prof);

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
        return array (  376 => 172,  362 => 171,  358 => 169,  352 => 166,  350 => 165,  342 => 160,  340 => 159,  338 => 158,  335 => 157,  333 => 156,  330 => 155,  327 => 154,  325 => 153,  321 => 152,  318 => 151,  315 => 150,  298 => 149,  293 => 146,  289 => 144,  287 => 143,  266 => 124,  252 => 123,  248 => 121,  242 => 118,  240 => 117,  232 => 112,  230 => 111,  228 => 110,  224 => 108,  222 => 107,  216 => 106,  212 => 105,  209 => 104,  206 => 103,  189 => 102,  184 => 99,  180 => 97,  178 => 96,  153 => 73,  145 => 67,  143 => 66,  139 => 64,  137 => 63,  130 => 59,  125 => 56,  123 => 55,  118 => 53,  112 => 49,  108 => 48,  104 => 46,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  63 => 17,  61 => 15,  52 => 8,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*                                 <th scope="row">{{ loop.index }}</th>*/
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
/*                                 <th scope="row">{{ loop.index }}</th>*/
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
