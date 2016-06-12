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
        $__internal_cb66a8801737931004418264e807f8f7d384bd01b703e272e46c77ee575fc483 = $this->env->getExtension("native_profiler");
        $__internal_cb66a8801737931004418264e807f8f7d384bd01b703e272e46c77ee575fc483->enter($__internal_cb66a8801737931004418264e807f8f7d384bd01b703e272e46c77ee575fc483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb66a8801737931004418264e807f8f7d384bd01b703e272e46c77ee575fc483->leave($__internal_cb66a8801737931004418264e807f8f7d384bd01b703e272e46c77ee575fc483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98a62a8c3afdb0fdbc4944f1db98857cc64a0606d430fd407e9a224b2917f8c4 = $this->env->getExtension("native_profiler");
        $__internal_98a62a8c3afdb0fdbc4944f1db98857cc64a0606d430fd407e9a224b2917f8c4->enter($__internal_98a62a8c3afdb0fdbc4944f1db98857cc64a0606d430fd407e9a224b2917f8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98a62a8c3afdb0fdbc4944f1db98857cc64a0606d430fd407e9a224b2917f8c4->leave($__internal_98a62a8c3afdb0fdbc4944f1db98857cc64a0606d430fd407e9a224b2917f8c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc66cff69578c8ea19f5e3d5e5682979eed38dcd8fd168182dd9341759de3b3c = $this->env->getExtension("native_profiler");
        $__internal_dc66cff69578c8ea19f5e3d5e5682979eed38dcd8fd168182dd9341759de3b3c->enter($__internal_dc66cff69578c8ea19f5e3d5e5682979eed38dcd8fd168182dd9341759de3b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc66cff69578c8ea19f5e3d5e5682979eed38dcd8fd168182dd9341759de3b3c->leave($__internal_dc66cff69578c8ea19f5e3d5e5682979eed38dcd8fd168182dd9341759de3b3c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec1cb7ab7e4e3a6f05ed368068555f8a77e99ac046766d8bc7496334dd6ccfb4 = $this->env->getExtension("native_profiler");
        $__internal_ec1cb7ab7e4e3a6f05ed368068555f8a77e99ac046766d8bc7496334dd6ccfb4->enter($__internal_ec1cb7ab7e4e3a6f05ed368068555f8a77e99ac046766d8bc7496334dd6ccfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec1cb7ab7e4e3a6f05ed368068555f8a77e99ac046766d8bc7496334dd6ccfb4->leave($__internal_ec1cb7ab7e4e3a6f05ed368068555f8a77e99ac046766d8bc7496334dd6ccfb4_prof);

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
