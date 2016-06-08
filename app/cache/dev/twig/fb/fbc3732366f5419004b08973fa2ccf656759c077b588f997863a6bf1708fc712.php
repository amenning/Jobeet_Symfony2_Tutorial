<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b8819e7372bace8d2aa52e1ae88a2a8b174839a2e35c898d7144a57fe1deea37 = $this->env->getExtension("native_profiler");
        $__internal_b8819e7372bace8d2aa52e1ae88a2a8b174839a2e35c898d7144a57fe1deea37->enter($__internal_b8819e7372bace8d2aa52e1ae88a2a8b174839a2e35c898d7144a57fe1deea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8819e7372bace8d2aa52e1ae88a2a8b174839a2e35c898d7144a57fe1deea37->leave($__internal_b8819e7372bace8d2aa52e1ae88a2a8b174839a2e35c898d7144a57fe1deea37_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_deb1815e730f8d46513d415247755180029e5b58d861b9e9b6be7c545d27881e = $this->env->getExtension("native_profiler");
        $__internal_deb1815e730f8d46513d415247755180029e5b58d861b9e9b6be7c545d27881e->enter($__internal_deb1815e730f8d46513d415247755180029e5b58d861b9e9b6be7c545d27881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deb1815e730f8d46513d415247755180029e5b58d861b9e9b6be7c545d27881e->leave($__internal_deb1815e730f8d46513d415247755180029e5b58d861b9e9b6be7c545d27881e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5f089b54cb34981112d27008cd9e91b3045e77654df1e2749b40ec64b371008 = $this->env->getExtension("native_profiler");
        $__internal_a5f089b54cb34981112d27008cd9e91b3045e77654df1e2749b40ec64b371008->enter($__internal_a5f089b54cb34981112d27008cd9e91b3045e77654df1e2749b40ec64b371008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5f089b54cb34981112d27008cd9e91b3045e77654df1e2749b40ec64b371008->leave($__internal_a5f089b54cb34981112d27008cd9e91b3045e77654df1e2749b40ec64b371008_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de8fa766416184a7ced00a225588c6ae29319e6ebad3caf8bac21d722e073107 = $this->env->getExtension("native_profiler");
        $__internal_de8fa766416184a7ced00a225588c6ae29319e6ebad3caf8bac21d722e073107->enter($__internal_de8fa766416184a7ced00a225588c6ae29319e6ebad3caf8bac21d722e073107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_de8fa766416184a7ced00a225588c6ae29319e6ebad3caf8bac21d722e073107->leave($__internal_de8fa766416184a7ced00a225588c6ae29319e6ebad3caf8bac21d722e073107_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
