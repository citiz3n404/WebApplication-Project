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
        $__internal_85818e1b8884c31b21a2a5921824bc99bcc8a6ba1fb61c51970234caf371a4a9 = $this->env->getExtension("native_profiler");
        $__internal_85818e1b8884c31b21a2a5921824bc99bcc8a6ba1fb61c51970234caf371a4a9->enter($__internal_85818e1b8884c31b21a2a5921824bc99bcc8a6ba1fb61c51970234caf371a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85818e1b8884c31b21a2a5921824bc99bcc8a6ba1fb61c51970234caf371a4a9->leave($__internal_85818e1b8884c31b21a2a5921824bc99bcc8a6ba1fb61c51970234caf371a4a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2405f48aeed646260ee424125c8f0732147e38fc19ec20b22b0345bb9371cc57 = $this->env->getExtension("native_profiler");
        $__internal_2405f48aeed646260ee424125c8f0732147e38fc19ec20b22b0345bb9371cc57->enter($__internal_2405f48aeed646260ee424125c8f0732147e38fc19ec20b22b0345bb9371cc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "</h2>

    <div class=\"col-md-12\">
    <div class=\"panel panel-default\">
        <!-- Default panel contents -->
        <div class=\"panel-heading\">Informations sur la formation</div>
        <table class=\"table table-striped\">
            <tbody>
                    <tr>
                        <th scope=\"row\">Description</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "begin", array()), "y-m-d"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Durée</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duration", array()), "html", null, true);
        echo " jours</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Status</th>
                        <td>";
        // line 29
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "locked", array())) {
            // line 30
            echo "                                Verouillée
                            ";
        } else {
            // line 32
            echo "                                Ouverte
                            ";
        }
        // line 33
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Coût</th>
                        <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "cost", array()), "html", null, true);
        echo " euros</td>
                    </tr>
            </tbody>
        </table>
    </div>


    <h2 class=\"page-header\">Paticipants</h2>
    <div class=\"col-md-6\">
        <div class=\"panel panel-success\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">Participants inscrits</div>
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 58
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
            // line 59
            echo "                    ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == true)) {
                // line 60
                echo "                        <tr>
                            <th scope=\"row\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                            <td><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 63
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                echo "</a></td>
                            <td>
                                ";
                // line 65
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 66
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 67
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-success\">Valider</a>
                                ";
                }
                // line 69
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger\">Remove</a>
                            </td>
                        </tr>
                    ";
            }
            // line 73
            echo "                ";
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
        // line 74
        echo "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"col-md-6\">
        <div class=\"panel panel-danger\">
            <!-- Default panel contents -->
            <div class=\"panel-heading\">Participants en attente de validation</div>
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 92
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
            // line 93
            echo "                    ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == false)) {
                // line 94
                echo "                        <tr>
                            <th scope=\"row\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                            <td><a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 97
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                // line 99
                echo "</a></td>
                            <td>
                                ";
                // line 101
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 102
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 103
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-success\">Valider</a>
                                ";
                }
                // line 105
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger\">Remove</a>
                            </td>
                        </tr>
                    ";
            }
            // line 109
            echo "                ";
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
        // line 110
        echo "                </tbody>
            </table>
        </div>
    </div>

";
        
        $__internal_2405f48aeed646260ee424125c8f0732147e38fc19ec20b22b0345bb9371cc57->leave($__internal_2405f48aeed646260ee424125c8f0732147e38fc19ec20b22b0345bb9371cc57_prof);

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
        return array (  275 => 110,  261 => 109,  253 => 105,  248 => 103,  246 => 102,  244 => 101,  240 => 99,  237 => 97,  235 => 96,  231 => 95,  228 => 94,  225 => 93,  208 => 92,  188 => 74,  174 => 73,  166 => 69,  161 => 67,  159 => 66,  157 => 65,  151 => 63,  149 => 62,  145 => 61,  142 => 60,  139 => 59,  122 => 58,  98 => 37,  92 => 33,  88 => 32,  84 => 30,  82 => 29,  75 => 25,  68 => 21,  61 => 17,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="/formation/">Back to  formation list</a>*/
/*     <a class="btn btn-primary" href="{{ path('formationinscription', {'id':*/
/*         formation.id}) }}">Inscription</a>*/
/*     <h2 class="page-header">{{ formation.title }}</h2>*/
/* */
/*     <div class="col-md-12">*/
/*     <div class="panel panel-default">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Informations sur la formation</div>*/
/*         <table class="table table-striped">*/
/*             <tbody>*/
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
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* */
/*     <h2 class="page-header">Paticipants</h2>*/
/*     <div class="col-md-6">*/
/*         <div class="panel panel-success">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">Participants inscrits</div>*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>User</th>*/
/*                     <th>Action</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for inscription in inscriptions %}*/
/*                     {%  if inscription.validated == true %}*/
/*                         <tr>*/
/*                             <th scope="row">{{ loop.index }}</th>*/
/*                             <td><a href="{{ path('profiluser', {'id': inscription*/
/*                                     .user.id })  }}"> {{ inscription.user.username }}</a></td>*/
/*                             <td>*/
/*                                 {%  if inscription.validated != true %}*/
/*                                     <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                         inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                                 {% endif %}*/
/*                                 <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-6">*/
/*         <div class="panel panel-danger">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading">Participants en attente de validation</div>*/
/*             <table class="table table-striped">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>#</th>*/
/*                     <th>User</th>*/
/*                     <th>Action</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for inscription in inscriptions %}*/
/*                     {% if inscription.validated == false %}*/
/*                         <tr>*/
/*                             <th scope="row">{{ loop.index }}</th>*/
/*                             <td><a href="{{ path('profiluser', {'id': inscription*/
/*                                     .user.id })   }}"> {{ inscription*/
/*                                     .user.username*/
/*                                     }}</a></td>*/
/*                             <td>*/
/*                                 {%  if inscription.validated != true %}*/
/*                                     <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                         inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                                 {% endif %}*/
/*                                 <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
