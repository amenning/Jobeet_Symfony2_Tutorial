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
        $__internal_29575c12af4c4915a288d594f9aba82984e20bded5ddf1e0ed41f8fefa0e58bd = $this->env->getExtension("native_profiler");
        $__internal_29575c12af4c4915a288d594f9aba82984e20bded5ddf1e0ed41f8fefa0e58bd->enter($__internal_29575c12af4c4915a288d594f9aba82984e20bded5ddf1e0ed41f8fefa0e58bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29575c12af4c4915a288d594f9aba82984e20bded5ddf1e0ed41f8fefa0e58bd->leave($__internal_29575c12af4c4915a288d594f9aba82984e20bded5ddf1e0ed41f8fefa0e58bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6abed498b72110c8cc2fd89ebc4ead464290c8214f15082469f92c2ac5372c38 = $this->env->getExtension("native_profiler");
        $__internal_6abed498b72110c8cc2fd89ebc4ead464290c8214f15082469f92c2ac5372c38->enter($__internal_6abed498b72110c8cc2fd89ebc4ead464290c8214f15082469f92c2ac5372c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6abed498b72110c8cc2fd89ebc4ead464290c8214f15082469f92c2ac5372c38->leave($__internal_6abed498b72110c8cc2fd89ebc4ead464290c8214f15082469f92c2ac5372c38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fea6929e0c2f95e0a55cfe6062cbe992d13bd62d50af60934d30e2dd59068c6c = $this->env->getExtension("native_profiler");
        $__internal_fea6929e0c2f95e0a55cfe6062cbe992d13bd62d50af60934d30e2dd59068c6c->enter($__internal_fea6929e0c2f95e0a55cfe6062cbe992d13bd62d50af60934d30e2dd59068c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fea6929e0c2f95e0a55cfe6062cbe992d13bd62d50af60934d30e2dd59068c6c->leave($__internal_fea6929e0c2f95e0a55cfe6062cbe992d13bd62d50af60934d30e2dd59068c6c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b28006e53e33f18d84f17356938528c6acfdb20572e052963989a7dc1d345b8 = $this->env->getExtension("native_profiler");
        $__internal_9b28006e53e33f18d84f17356938528c6acfdb20572e052963989a7dc1d345b8->enter($__internal_9b28006e53e33f18d84f17356938528c6acfdb20572e052963989a7dc1d345b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b28006e53e33f18d84f17356938528c6acfdb20572e052963989a7dc1d345b8->leave($__internal_9b28006e53e33f18d84f17356938528c6acfdb20572e052963989a7dc1d345b8_prof);

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
