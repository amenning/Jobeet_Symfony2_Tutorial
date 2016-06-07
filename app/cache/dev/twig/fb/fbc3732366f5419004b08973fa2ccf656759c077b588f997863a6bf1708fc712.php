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
        $__internal_d5ce3a00fda5084fdbb0fd9c1d6dda075939ec3d3bb361974960ad30af7c7424 = $this->env->getExtension("native_profiler");
        $__internal_d5ce3a00fda5084fdbb0fd9c1d6dda075939ec3d3bb361974960ad30af7c7424->enter($__internal_d5ce3a00fda5084fdbb0fd9c1d6dda075939ec3d3bb361974960ad30af7c7424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5ce3a00fda5084fdbb0fd9c1d6dda075939ec3d3bb361974960ad30af7c7424->leave($__internal_d5ce3a00fda5084fdbb0fd9c1d6dda075939ec3d3bb361974960ad30af7c7424_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57eb26cfcd7bc65a095b78784d381fe2e6946e3a4f8fe8f8513c925094c04998 = $this->env->getExtension("native_profiler");
        $__internal_57eb26cfcd7bc65a095b78784d381fe2e6946e3a4f8fe8f8513c925094c04998->enter($__internal_57eb26cfcd7bc65a095b78784d381fe2e6946e3a4f8fe8f8513c925094c04998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57eb26cfcd7bc65a095b78784d381fe2e6946e3a4f8fe8f8513c925094c04998->leave($__internal_57eb26cfcd7bc65a095b78784d381fe2e6946e3a4f8fe8f8513c925094c04998_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e862c862e84f41a36513fdab8bc29942f352e28525bd3c1c62a62fb6cff4ffeb = $this->env->getExtension("native_profiler");
        $__internal_e862c862e84f41a36513fdab8bc29942f352e28525bd3c1c62a62fb6cff4ffeb->enter($__internal_e862c862e84f41a36513fdab8bc29942f352e28525bd3c1c62a62fb6cff4ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e862c862e84f41a36513fdab8bc29942f352e28525bd3c1c62a62fb6cff4ffeb->leave($__internal_e862c862e84f41a36513fdab8bc29942f352e28525bd3c1c62a62fb6cff4ffeb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ce38a726027aaad8626b2c75b4343860e9aa08fd9bd99b0d6ec04af1ed71e2d = $this->env->getExtension("native_profiler");
        $__internal_9ce38a726027aaad8626b2c75b4343860e9aa08fd9bd99b0d6ec04af1ed71e2d->enter($__internal_9ce38a726027aaad8626b2c75b4343860e9aa08fd9bd99b0d6ec04af1ed71e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ce38a726027aaad8626b2c75b4343860e9aa08fd9bd99b0d6ec04af1ed71e2d->leave($__internal_9ce38a726027aaad8626b2c75b4343860e9aa08fd9bd99b0d6ec04af1ed71e2d_prof);

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
