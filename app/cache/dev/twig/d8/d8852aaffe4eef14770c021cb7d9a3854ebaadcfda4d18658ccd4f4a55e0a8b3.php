<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_150e4add4629022016fa413aa03d74730d378e5cbced254b5e30c9670e94d7ef = $this->env->getExtension("native_profiler");
        $__internal_150e4add4629022016fa413aa03d74730d378e5cbced254b5e30c9670e94d7ef->enter($__internal_150e4add4629022016fa413aa03d74730d378e5cbced254b5e30c9670e94d7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150e4add4629022016fa413aa03d74730d378e5cbced254b5e30c9670e94d7ef->leave($__internal_150e4add4629022016fa413aa03d74730d378e5cbced254b5e30c9670e94d7ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1339615480db9469ceed966a82d394e02edfdacd01214dc6ede2ca6f20fb992 = $this->env->getExtension("native_profiler");
        $__internal_c1339615480db9469ceed966a82d394e02edfdacd01214dc6ede2ca6f20fb992->enter($__internal_c1339615480db9469ceed966a82d394e02edfdacd01214dc6ede2ca6f20fb992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c1339615480db9469ceed966a82d394e02edfdacd01214dc6ede2ca6f20fb992->leave($__internal_c1339615480db9469ceed966a82d394e02edfdacd01214dc6ede2ca6f20fb992_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90cd560aecbe874ce342bb4dd2e3747f73181034d15e7e0f9bfdcc080b582e0 = $this->env->getExtension("native_profiler");
        $__internal_f90cd560aecbe874ce342bb4dd2e3747f73181034d15e7e0f9bfdcc080b582e0->enter($__internal_f90cd560aecbe874ce342bb4dd2e3747f73181034d15e7e0f9bfdcc080b582e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f90cd560aecbe874ce342bb4dd2e3747f73181034d15e7e0f9bfdcc080b582e0->leave($__internal_f90cd560aecbe874ce342bb4dd2e3747f73181034d15e7e0f9bfdcc080b582e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
