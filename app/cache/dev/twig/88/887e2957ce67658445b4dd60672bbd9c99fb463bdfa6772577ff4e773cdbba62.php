<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_640a2db2b754b49c23d427cf99dadbbfc5a24df6149f4d546f7fde7b9379bd21 extends Twig_Template
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
        $__internal_abeb4f977578b604915a220c0f217d812f58af33b011999b26492528b192a78f = $this->env->getExtension("native_profiler");
        $__internal_abeb4f977578b604915a220c0f217d812f58af33b011999b26492528b192a78f->enter($__internal_abeb4f977578b604915a220c0f217d812f58af33b011999b26492528b192a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abeb4f977578b604915a220c0f217d812f58af33b011999b26492528b192a78f->leave($__internal_abeb4f977578b604915a220c0f217d812f58af33b011999b26492528b192a78f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9181ff3ec9e9cd9c55ecaaf82b0baf02f7dac9e3d7e31fe448b5e604a264bdb0 = $this->env->getExtension("native_profiler");
        $__internal_9181ff3ec9e9cd9c55ecaaf82b0baf02f7dac9e3d7e31fe448b5e604a264bdb0->enter($__internal_9181ff3ec9e9cd9c55ecaaf82b0baf02f7dac9e3d7e31fe448b5e604a264bdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9181ff3ec9e9cd9c55ecaaf82b0baf02f7dac9e3d7e31fe448b5e604a264bdb0->leave($__internal_9181ff3ec9e9cd9c55ecaaf82b0baf02f7dac9e3d7e31fe448b5e604a264bdb0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87d58dc15c5d8b04dda91ed980fecb281d2592964b4cda7628935be07e0b0668 = $this->env->getExtension("native_profiler");
        $__internal_87d58dc15c5d8b04dda91ed980fecb281d2592964b4cda7628935be07e0b0668->enter($__internal_87d58dc15c5d8b04dda91ed980fecb281d2592964b4cda7628935be07e0b0668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87d58dc15c5d8b04dda91ed980fecb281d2592964b4cda7628935be07e0b0668->leave($__internal_87d58dc15c5d8b04dda91ed980fecb281d2592964b4cda7628935be07e0b0668_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e3b20bbd7261ee61e332670243b3e46b3e5966b1cd0c066ed83c7de2b5978d = $this->env->getExtension("native_profiler");
        $__internal_70e3b20bbd7261ee61e332670243b3e46b3e5966b1cd0c066ed83c7de2b5978d->enter($__internal_70e3b20bbd7261ee61e332670243b3e46b3e5966b1cd0c066ed83c7de2b5978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_70e3b20bbd7261ee61e332670243b3e46b3e5966b1cd0c066ed83c7de2b5978d->leave($__internal_70e3b20bbd7261ee61e332670243b3e46b3e5966b1cd0c066ed83c7de2b5978d_prof);

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
