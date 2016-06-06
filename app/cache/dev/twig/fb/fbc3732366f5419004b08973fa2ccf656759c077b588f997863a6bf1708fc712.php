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
        $__internal_ff086ed543ef1ce00c4fa894b6f919527b7c333afb430b27014777075eda90e8 = $this->env->getExtension("native_profiler");
        $__internal_ff086ed543ef1ce00c4fa894b6f919527b7c333afb430b27014777075eda90e8->enter($__internal_ff086ed543ef1ce00c4fa894b6f919527b7c333afb430b27014777075eda90e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff086ed543ef1ce00c4fa894b6f919527b7c333afb430b27014777075eda90e8->leave($__internal_ff086ed543ef1ce00c4fa894b6f919527b7c333afb430b27014777075eda90e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74b02475c9a500df831052d980929a3bf5daa205950bd61cde5416b0305459ef = $this->env->getExtension("native_profiler");
        $__internal_74b02475c9a500df831052d980929a3bf5daa205950bd61cde5416b0305459ef->enter($__internal_74b02475c9a500df831052d980929a3bf5daa205950bd61cde5416b0305459ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74b02475c9a500df831052d980929a3bf5daa205950bd61cde5416b0305459ef->leave($__internal_74b02475c9a500df831052d980929a3bf5daa205950bd61cde5416b0305459ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce1fdb8b5c64de33e94aa6a1ff8a68ed8975a4f94fec3d883be508f55bbe50eb = $this->env->getExtension("native_profiler");
        $__internal_ce1fdb8b5c64de33e94aa6a1ff8a68ed8975a4f94fec3d883be508f55bbe50eb->enter($__internal_ce1fdb8b5c64de33e94aa6a1ff8a68ed8975a4f94fec3d883be508f55bbe50eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce1fdb8b5c64de33e94aa6a1ff8a68ed8975a4f94fec3d883be508f55bbe50eb->leave($__internal_ce1fdb8b5c64de33e94aa6a1ff8a68ed8975a4f94fec3d883be508f55bbe50eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc6f00c25b07763d4596b6b6dab6a685d3fb637ee4f1bbf919c1c1e9f04ccbdf = $this->env->getExtension("native_profiler");
        $__internal_bc6f00c25b07763d4596b6b6dab6a685d3fb637ee4f1bbf919c1c1e9f04ccbdf->enter($__internal_bc6f00c25b07763d4596b6b6dab6a685d3fb637ee4f1bbf919c1c1e9f04ccbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc6f00c25b07763d4596b6b6dab6a685d3fb637ee4f1bbf919c1c1e9f04ccbdf->leave($__internal_bc6f00c25b07763d4596b6b6dab6a685d3fb637ee4f1bbf919c1c1e9f04ccbdf_prof);

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
