<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c00035491781223455851eb1727d96d91413b2648db13cf907fa246c50ef2fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e34d47dec7db8ca4c9a9fc29a5fa4ee2cfb1bebae6002d9558ace5b1a89e5a = $this->env->getExtension("native_profiler");
        $__internal_88e34d47dec7db8ca4c9a9fc29a5fa4ee2cfb1bebae6002d9558ace5b1a89e5a->enter($__internal_88e34d47dec7db8ca4c9a9fc29a5fa4ee2cfb1bebae6002d9558ace5b1a89e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e34d47dec7db8ca4c9a9fc29a5fa4ee2cfb1bebae6002d9558ace5b1a89e5a->leave($__internal_88e34d47dec7db8ca4c9a9fc29a5fa4ee2cfb1bebae6002d9558ace5b1a89e5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89cee11759b778c5ee92fbb269e5c982599d38e24c35acdd11332e3c59916ad4 = $this->env->getExtension("native_profiler");
        $__internal_89cee11759b778c5ee92fbb269e5c982599d38e24c35acdd11332e3c59916ad4->enter($__internal_89cee11759b778c5ee92fbb269e5c982599d38e24c35acdd11332e3c59916ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89cee11759b778c5ee92fbb269e5c982599d38e24c35acdd11332e3c59916ad4->leave($__internal_89cee11759b778c5ee92fbb269e5c982599d38e24c35acdd11332e3c59916ad4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dfed639037e9f43fb24a369703019195b6998c86bcdd479b64c017e03d04d49 = $this->env->getExtension("native_profiler");
        $__internal_5dfed639037e9f43fb24a369703019195b6998c86bcdd479b64c017e03d04d49->enter($__internal_5dfed639037e9f43fb24a369703019195b6998c86bcdd479b64c017e03d04d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5dfed639037e9f43fb24a369703019195b6998c86bcdd479b64c017e03d04d49->leave($__internal_5dfed639037e9f43fb24a369703019195b6998c86bcdd479b64c017e03d04d49_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_165157a6beb06e467f422749a48724ab6f48d9bc7077c0727dd933ad1b831bdd = $this->env->getExtension("native_profiler");
        $__internal_165157a6beb06e467f422749a48724ab6f48d9bc7077c0727dd933ad1b831bdd->enter($__internal_165157a6beb06e467f422749a48724ab6f48d9bc7077c0727dd933ad1b831bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_165157a6beb06e467f422749a48724ab6f48d9bc7077c0727dd933ad1b831bdd->leave($__internal_165157a6beb06e467f422749a48724ab6f48d9bc7077c0727dd933ad1b831bdd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
