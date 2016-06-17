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
        $__internal_719e7af5137be8fe1bbdc728d44d043ce2de533473b706596ea5cf3e8a207d30 = $this->env->getExtension("native_profiler");
        $__internal_719e7af5137be8fe1bbdc728d44d043ce2de533473b706596ea5cf3e8a207d30->enter($__internal_719e7af5137be8fe1bbdc728d44d043ce2de533473b706596ea5cf3e8a207d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_719e7af5137be8fe1bbdc728d44d043ce2de533473b706596ea5cf3e8a207d30->leave($__internal_719e7af5137be8fe1bbdc728d44d043ce2de533473b706596ea5cf3e8a207d30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4798539d6f11cc576b36e456e5274706e9ec1547302fc34ae98ca61487bf9ee = $this->env->getExtension("native_profiler");
        $__internal_e4798539d6f11cc576b36e456e5274706e9ec1547302fc34ae98ca61487bf9ee->enter($__internal_e4798539d6f11cc576b36e456e5274706e9ec1547302fc34ae98ca61487bf9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e4798539d6f11cc576b36e456e5274706e9ec1547302fc34ae98ca61487bf9ee->leave($__internal_e4798539d6f11cc576b36e456e5274706e9ec1547302fc34ae98ca61487bf9ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0879302bf9df42bd878427d4306674b9697445556365bebbaf8a1aeae2afbad0 = $this->env->getExtension("native_profiler");
        $__internal_0879302bf9df42bd878427d4306674b9697445556365bebbaf8a1aeae2afbad0->enter($__internal_0879302bf9df42bd878427d4306674b9697445556365bebbaf8a1aeae2afbad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0879302bf9df42bd878427d4306674b9697445556365bebbaf8a1aeae2afbad0->leave($__internal_0879302bf9df42bd878427d4306674b9697445556365bebbaf8a1aeae2afbad0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ae45b32a7de81dc7178bdb7eaf90f8e8f8a2bf6725bb6f4b8502f1a098b87bb = $this->env->getExtension("native_profiler");
        $__internal_6ae45b32a7de81dc7178bdb7eaf90f8e8f8a2bf6725bb6f4b8502f1a098b87bb->enter($__internal_6ae45b32a7de81dc7178bdb7eaf90f8e8f8a2bf6725bb6f4b8502f1a098b87bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ae45b32a7de81dc7178bdb7eaf90f8e8f8a2bf6725bb6f4b8502f1a098b87bb->leave($__internal_6ae45b32a7de81dc7178bdb7eaf90f8e8f8a2bf6725bb6f4b8502f1a098b87bb_prof);

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
