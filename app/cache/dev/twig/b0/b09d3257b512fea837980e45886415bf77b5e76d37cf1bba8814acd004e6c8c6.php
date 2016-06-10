<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33a5d8b34d08ad75e148e6292ac7b1dd1c2ef375dbc9e3312ba56e22aeaa5112 = $this->env->getExtension("native_profiler");
        $__internal_33a5d8b34d08ad75e148e6292ac7b1dd1c2ef375dbc9e3312ba56e22aeaa5112->enter($__internal_33a5d8b34d08ad75e148e6292ac7b1dd1c2ef375dbc9e3312ba56e22aeaa5112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a5d8b34d08ad75e148e6292ac7b1dd1c2ef375dbc9e3312ba56e22aeaa5112->leave($__internal_33a5d8b34d08ad75e148e6292ac7b1dd1c2ef375dbc9e3312ba56e22aeaa5112_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5a36816e6b8ef52f9a9256c252e6e198ffcef5d07d4a6a8c2d3b95d94d86fa3 = $this->env->getExtension("native_profiler");
        $__internal_f5a36816e6b8ef52f9a9256c252e6e198ffcef5d07d4a6a8c2d3b95d94d86fa3->enter($__internal_f5a36816e6b8ef52f9a9256c252e6e198ffcef5d07d4a6a8c2d3b95d94d86fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5a36816e6b8ef52f9a9256c252e6e198ffcef5d07d4a6a8c2d3b95d94d86fa3->leave($__internal_f5a36816e6b8ef52f9a9256c252e6e198ffcef5d07d4a6a8c2d3b95d94d86fa3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4ea0cafc033d71b28c5cc0785261d2b62f3d72ecd9c575ba0f4e878bfa39be8 = $this->env->getExtension("native_profiler");
        $__internal_b4ea0cafc033d71b28c5cc0785261d2b62f3d72ecd9c575ba0f4e878bfa39be8->enter($__internal_b4ea0cafc033d71b28c5cc0785261d2b62f3d72ecd9c575ba0f4e878bfa39be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4ea0cafc033d71b28c5cc0785261d2b62f3d72ecd9c575ba0f4e878bfa39be8->leave($__internal_b4ea0cafc033d71b28c5cc0785261d2b62f3d72ecd9c575ba0f4e878bfa39be8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a06d66c1ced1525db001e6cbf8626ba981ec3bda14fdaea12bb1fee7c4b9897c = $this->env->getExtension("native_profiler");
        $__internal_a06d66c1ced1525db001e6cbf8626ba981ec3bda14fdaea12bb1fee7c4b9897c->enter($__internal_a06d66c1ced1525db001e6cbf8626ba981ec3bda14fdaea12bb1fee7c4b9897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a06d66c1ced1525db001e6cbf8626ba981ec3bda14fdaea12bb1fee7c4b9897c->leave($__internal_a06d66c1ced1525db001e6cbf8626ba981ec3bda14fdaea12bb1fee7c4b9897c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
