<?php

/* ForumBundle:Topic:listTopics.html.twig */
class __TwigTemplate_1e0fcdc7ebbbccc2c795c50ff8545041bbf1ea12dfd1d3510e2ea13c2a0e111a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Topic:listTopics.html.twig", 1);
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
        $__internal_3f351a644a2c68154137a8149aa0e5d4fb3c7bc586af01135c528ad382906d66 = $this->env->getExtension("native_profiler");
        $__internal_3f351a644a2c68154137a8149aa0e5d4fb3c7bc586af01135c528ad382906d66->enter($__internal_3f351a644a2c68154137a8149aa0e5d4fb3c7bc586af01135c528ad382906d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:listTopics.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f351a644a2c68154137a8149aa0e5d4fb3c7bc586af01135c528ad382906d66->leave($__internal_3f351a644a2c68154137a8149aa0e5d4fb3c7bc586af01135c528ad382906d66_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a32885fb1a5aa5df7f63931d538726777f695a6479ab26007516d79648d758 = $this->env->getExtension("native_profiler");
        $__internal_41a32885fb1a5aa5df7f63931d538726777f695a6479ab26007516d79648d758->enter($__internal_41a32885fb1a5aa5df7f63931d538726777f695a6479ab26007516d79648d758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "name", array()), "html", null, true);
        echo "</h2>
    <a class=\"btn btn-default\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("createtopic", array("id" => $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Create a new topic</a>

    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>#</th>
            <th>Topic</th>
            <th>Replies</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : $this->getContext($context, "topics")));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 19
            echo "            <tr>
                <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "id", array()), "html", null, true);
            echo "</th>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicdisplay", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(            // line 22
$context["topic"], "subject", array()), "html", null, true);
            // line 23
            echo "</a></td>
                <td></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edittopic", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("removetopic", array("id" => $this->getAttribute($context["topic"], "id", array()))), "html", null, true);
            // line 29
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
";
        
        $__internal_41a32885fb1a5aa5df7f63931d538726777f695a6479ab26007516d79648d758->leave($__internal_41a32885fb1a5aa5df7f63931d538726777f695a6479ab26007516d79648d758_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Topic:listTopics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  93 => 29,  91 => 28,  85 => 25,  81 => 23,  79 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h2 class="page-header">{{ categorie.name }}</h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <a href="{{ path('createtopic', {'id': categorie.id}) }}"*/
/*        class="btn btn-success">Create a new topic</a>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>Topic</th>*/
/*             <th>Replies</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for topic in topics %}*/
/*             <tr>*/
/*                 <th scope="row">{{ topic.id }}</th>*/
/*                 <td><a href="{{ path('topicdisplay', {'id': topic.id}) }}"> {{*/
/*                         topic.subject*/
/*                         }}</a></td>*/
/*                 <td></td>*/
/*                 <td><a href="{{ path('edittopic', {'id': topic.id}) }}"*/
/*                        class="btn*/
/*                 btn-default">Edit</a>*/
/*                     <a href="{{ path('removetopic', {'id': topic.id})*/
/*                     }}" class="btn*/
/*                 btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
