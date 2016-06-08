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
        $__internal_a3597a95ceb0eef6b86e10220365fcac64400fa82fb76d2165981fbc5fd24b80 = $this->env->getExtension("native_profiler");
        $__internal_a3597a95ceb0eef6b86e10220365fcac64400fa82fb76d2165981fbc5fd24b80->enter($__internal_a3597a95ceb0eef6b86e10220365fcac64400fa82fb76d2165981fbc5fd24b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3597a95ceb0eef6b86e10220365fcac64400fa82fb76d2165981fbc5fd24b80->leave($__internal_a3597a95ceb0eef6b86e10220365fcac64400fa82fb76d2165981fbc5fd24b80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a69bdf388b5406b61f7a8bcc8c693bea6c6dbb9ae4867e1dc35656d1a0000c2 = $this->env->getExtension("native_profiler");
        $__internal_9a69bdf388b5406b61f7a8bcc8c693bea6c6dbb9ae4867e1dc35656d1a0000c2->enter($__internal_9a69bdf388b5406b61f7a8bcc8c693bea6c6dbb9ae4867e1dc35656d1a0000c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a69bdf388b5406b61f7a8bcc8c693bea6c6dbb9ae4867e1dc35656d1a0000c2->leave($__internal_9a69bdf388b5406b61f7a8bcc8c693bea6c6dbb9ae4867e1dc35656d1a0000c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b53124f68f3d28366053ad09d91116a2db36fbc9ba36334b435cc1feafd4b361 = $this->env->getExtension("native_profiler");
        $__internal_b53124f68f3d28366053ad09d91116a2db36fbc9ba36334b435cc1feafd4b361->enter($__internal_b53124f68f3d28366053ad09d91116a2db36fbc9ba36334b435cc1feafd4b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b53124f68f3d28366053ad09d91116a2db36fbc9ba36334b435cc1feafd4b361->leave($__internal_b53124f68f3d28366053ad09d91116a2db36fbc9ba36334b435cc1feafd4b361_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddc91f3142fd52275bad86638019552d8999cde1b55b0fd6a3ac4b5830e44f78 = $this->env->getExtension("native_profiler");
        $__internal_ddc91f3142fd52275bad86638019552d8999cde1b55b0fd6a3ac4b5830e44f78->enter($__internal_ddc91f3142fd52275bad86638019552d8999cde1b55b0fd6a3ac4b5830e44f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ddc91f3142fd52275bad86638019552d8999cde1b55b0fd6a3ac4b5830e44f78->leave($__internal_ddc91f3142fd52275bad86638019552d8999cde1b55b0fd6a3ac4b5830e44f78_prof);

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
