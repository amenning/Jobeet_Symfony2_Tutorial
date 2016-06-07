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
        $__internal_683c263dc9581305789bdf55368935f18078dd534c44547d4fae16726ce33cba = $this->env->getExtension("native_profiler");
        $__internal_683c263dc9581305789bdf55368935f18078dd534c44547d4fae16726ce33cba->enter($__internal_683c263dc9581305789bdf55368935f18078dd534c44547d4fae16726ce33cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_683c263dc9581305789bdf55368935f18078dd534c44547d4fae16726ce33cba->leave($__internal_683c263dc9581305789bdf55368935f18078dd534c44547d4fae16726ce33cba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c434e9010119e31bf627c575496ec1062e038b229abc8a534e3b300ef82a424 = $this->env->getExtension("native_profiler");
        $__internal_0c434e9010119e31bf627c575496ec1062e038b229abc8a534e3b300ef82a424->enter($__internal_0c434e9010119e31bf627c575496ec1062e038b229abc8a534e3b300ef82a424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c434e9010119e31bf627c575496ec1062e038b229abc8a534e3b300ef82a424->leave($__internal_0c434e9010119e31bf627c575496ec1062e038b229abc8a534e3b300ef82a424_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cba886ef14e041951d98c9eb284f7ba48547dafa90a674849e817615feb2ee9c = $this->env->getExtension("native_profiler");
        $__internal_cba886ef14e041951d98c9eb284f7ba48547dafa90a674849e817615feb2ee9c->enter($__internal_cba886ef14e041951d98c9eb284f7ba48547dafa90a674849e817615feb2ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cba886ef14e041951d98c9eb284f7ba48547dafa90a674849e817615feb2ee9c->leave($__internal_cba886ef14e041951d98c9eb284f7ba48547dafa90a674849e817615feb2ee9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1c430f0929a4a7436e3e830dce4907cfbf44c5ea30209b6900d4ca4a809f18 = $this->env->getExtension("native_profiler");
        $__internal_3a1c430f0929a4a7436e3e830dce4907cfbf44c5ea30209b6900d4ca4a809f18->enter($__internal_3a1c430f0929a4a7436e3e830dce4907cfbf44c5ea30209b6900d4ca4a809f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3a1c430f0929a4a7436e3e830dce4907cfbf44c5ea30209b6900d4ca4a809f18->leave($__internal_3a1c430f0929a4a7436e3e830dce4907cfbf44c5ea30209b6900d4ca4a809f18_prof);

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
