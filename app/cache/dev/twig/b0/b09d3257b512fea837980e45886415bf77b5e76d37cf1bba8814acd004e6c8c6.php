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
        $__internal_6efb742074580a18bbc715edc74e3109701dd1376bf50d2dbc0e233dff3463c2 = $this->env->getExtension("native_profiler");
        $__internal_6efb742074580a18bbc715edc74e3109701dd1376bf50d2dbc0e233dff3463c2->enter($__internal_6efb742074580a18bbc715edc74e3109701dd1376bf50d2dbc0e233dff3463c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6efb742074580a18bbc715edc74e3109701dd1376bf50d2dbc0e233dff3463c2->leave($__internal_6efb742074580a18bbc715edc74e3109701dd1376bf50d2dbc0e233dff3463c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc6901ecc00f7311acf40cd841d95dea9c6d8feb1cbf806e6f374765e8648dd7 = $this->env->getExtension("native_profiler");
        $__internal_bc6901ecc00f7311acf40cd841d95dea9c6d8feb1cbf806e6f374765e8648dd7->enter($__internal_bc6901ecc00f7311acf40cd841d95dea9c6d8feb1cbf806e6f374765e8648dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc6901ecc00f7311acf40cd841d95dea9c6d8feb1cbf806e6f374765e8648dd7->leave($__internal_bc6901ecc00f7311acf40cd841d95dea9c6d8feb1cbf806e6f374765e8648dd7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fb36e854e32f909504d0039f4e988841640dfbf262aa5b25b8ce5f4330aa6e6 = $this->env->getExtension("native_profiler");
        $__internal_4fb36e854e32f909504d0039f4e988841640dfbf262aa5b25b8ce5f4330aa6e6->enter($__internal_4fb36e854e32f909504d0039f4e988841640dfbf262aa5b25b8ce5f4330aa6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4fb36e854e32f909504d0039f4e988841640dfbf262aa5b25b8ce5f4330aa6e6->leave($__internal_4fb36e854e32f909504d0039f4e988841640dfbf262aa5b25b8ce5f4330aa6e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a168907882b1a81dbc399cbc3e31dc05b0cffe85c8d0f9b4f8cb6bbb9108b719 = $this->env->getExtension("native_profiler");
        $__internal_a168907882b1a81dbc399cbc3e31dc05b0cffe85c8d0f9b4f8cb6bbb9108b719->enter($__internal_a168907882b1a81dbc399cbc3e31dc05b0cffe85c8d0f9b4f8cb6bbb9108b719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a168907882b1a81dbc399cbc3e31dc05b0cffe85c8d0f9b4f8cb6bbb9108b719->leave($__internal_a168907882b1a81dbc399cbc3e31dc05b0cffe85c8d0f9b4f8cb6bbb9108b719_prof);

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
