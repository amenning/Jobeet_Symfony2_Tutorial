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
        $__internal_c37ebb3bcc2e1b5fc264b0c07d87de2c5cfb362f189c971f85c40d428843b160 = $this->env->getExtension("native_profiler");
        $__internal_c37ebb3bcc2e1b5fc264b0c07d87de2c5cfb362f189c971f85c40d428843b160->enter($__internal_c37ebb3bcc2e1b5fc264b0c07d87de2c5cfb362f189c971f85c40d428843b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37ebb3bcc2e1b5fc264b0c07d87de2c5cfb362f189c971f85c40d428843b160->leave($__internal_c37ebb3bcc2e1b5fc264b0c07d87de2c5cfb362f189c971f85c40d428843b160_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb755f3dced9d7668c44b0c819542c9ae018def2f08fac2f3c05f6404ac3e290 = $this->env->getExtension("native_profiler");
        $__internal_bb755f3dced9d7668c44b0c819542c9ae018def2f08fac2f3c05f6404ac3e290->enter($__internal_bb755f3dced9d7668c44b0c819542c9ae018def2f08fac2f3c05f6404ac3e290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb755f3dced9d7668c44b0c819542c9ae018def2f08fac2f3c05f6404ac3e290->leave($__internal_bb755f3dced9d7668c44b0c819542c9ae018def2f08fac2f3c05f6404ac3e290_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a68b7c86b45b76049079e4cad9a22bf75d7ab26806189f05914c616a1dfea4a3 = $this->env->getExtension("native_profiler");
        $__internal_a68b7c86b45b76049079e4cad9a22bf75d7ab26806189f05914c616a1dfea4a3->enter($__internal_a68b7c86b45b76049079e4cad9a22bf75d7ab26806189f05914c616a1dfea4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a68b7c86b45b76049079e4cad9a22bf75d7ab26806189f05914c616a1dfea4a3->leave($__internal_a68b7c86b45b76049079e4cad9a22bf75d7ab26806189f05914c616a1dfea4a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76310c2a5048c64357ec0788786bc4fdf4096063f1e3a5b0a6f31f7efd5b4458 = $this->env->getExtension("native_profiler");
        $__internal_76310c2a5048c64357ec0788786bc4fdf4096063f1e3a5b0a6f31f7efd5b4458->enter($__internal_76310c2a5048c64357ec0788786bc4fdf4096063f1e3a5b0a6f31f7efd5b4458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76310c2a5048c64357ec0788786bc4fdf4096063f1e3a5b0a6f31f7efd5b4458->leave($__internal_76310c2a5048c64357ec0788786bc4fdf4096063f1e3a5b0a6f31f7efd5b4458_prof);

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
