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
        $__internal_e001c682612637ff23128ec58a28421c4e47ad6baa23308088231d9f3d5f86f4 = $this->env->getExtension("native_profiler");
        $__internal_e001c682612637ff23128ec58a28421c4e47ad6baa23308088231d9f3d5f86f4->enter($__internal_e001c682612637ff23128ec58a28421c4e47ad6baa23308088231d9f3d5f86f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e001c682612637ff23128ec58a28421c4e47ad6baa23308088231d9f3d5f86f4->leave($__internal_e001c682612637ff23128ec58a28421c4e47ad6baa23308088231d9f3d5f86f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1c937959116d871bff39e966b5f3575f021e1ea439ef16e7fd4885c4126ed7e = $this->env->getExtension("native_profiler");
        $__internal_b1c937959116d871bff39e966b5f3575f021e1ea439ef16e7fd4885c4126ed7e->enter($__internal_b1c937959116d871bff39e966b5f3575f021e1ea439ef16e7fd4885c4126ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <tr>
                        <th><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        echo "\">
                                <span class=\"label label-info\" >Edit</span></a>


                            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        // line 61
        echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        // line 64
        echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>
                        </th>
                        <td></td>
                    </tr>
                    </tbody>
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 95
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
            // line 96
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == true)) {
                // line 97
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                <td><a href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                echo "</a></td>
                                <td>
                                    ";
                // line 101
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 102
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 103
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn
                                            btn-success btn-sm \"><span
                                                    class=\"fa fa-check\"
                                                    aria-hidden=\"true\"></span></a>
                                    ";
                }
                // line 108
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute(                // line 109
$context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger btn-sm\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span></a>
                                </td>
                            </tr>
                        ";
            }
            // line 113
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
        // line 114
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 137
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
            // line 138
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == false)) {
                // line 139
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                <td><a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 142
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                // line 143
                echo "</a></td>
                                <td>
                                    ";
                // line 145
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 146
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 147
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn
                                            btn-success btn-sm\"><span
                                                    class=\"fa fa-check\"
                                                    aria-hidden=\"true\"></span></a>
                                    ";
                }
                // line 152
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute(                // line 153
$context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger btn-sm\"><span class=\"fa fa-times\" aria-hidden=\"true\"></span></a>
                                </td>
                            </tr>
                        ";
            }
            // line 157
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
        // line 158
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>



";
        
        $__internal_b1c937959116d871bff39e966b5f3575f021e1ea439ef16e7fd4885c4126ed7e->leave($__internal_b1c937959116d871bff39e966b5f3575f021e1ea439ef16e7fd4885c4126ed7e_prof);

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
        return array (  337 => 158,  323 => 157,  316 => 153,  314 => 152,  306 => 147,  304 => 146,  302 => 145,  298 => 143,  295 => 142,  293 => 141,  289 => 140,  286 => 139,  283 => 138,  266 => 137,  241 => 114,  227 => 113,  220 => 109,  218 => 108,  210 => 103,  208 => 102,  206 => 101,  199 => 99,  195 => 98,  192 => 97,  189 => 96,  172 => 95,  139 => 64,  137 => 63,  133 => 61,  131 => 60,  124 => 56,  118 => 53,  112 => 49,  108 => 48,  104 => 46,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  63 => 17,  61 => 15,  52 => 8,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <tr>*/
/*                         <th><a href="{{ path('formationedit', {'id': formation.id}) }}">*/
/*                                 <span class="label label-info" >Edit</span></a>*/
/* */
/* */
/*                             <a href="{{ path('formationlock', {'id': formation.id})*/
/*                             }}"><span class="label label-warning"><i class="fa fa-lock" aria-hidden="true"></i></span></a>*/
/* */
/*                             <a href="{{ path('formationremove', {'id': formation.id})*/
/*                             }}" ><span class="label label-danger" ><i class="fa fa-trash" aria-hidden="true"></i></span></a>*/
/*                         </th>*/
/*                         <td></td>*/
/*                     </tr>*/
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
/*                         <th>Action</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for inscription in inscriptions %}*/
/*                         {%  if inscription.validated == true %}*/
/*                             <tr>*/
/*                                 <th scope="row">{{ loop.index }}</th>*/
/*                                 <td><a href="{{ path('profiluser', {'id': inscription.user.id })  }}"> {{ inscription.user.username }}</a></td>*/
/*                                 <td>*/
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
/*                         <th>Action</th>*/
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
