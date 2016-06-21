<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f7be8442c4354b2d3ce0687dad50551e864c04c62b8b934297f6b1420a1a05ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad315157240e2aa68a6396b9c6bfb91f12cdefdcbc71fd6a87d858161cc8d72f = $this->env->getExtension("native_profiler");
        $__internal_ad315157240e2aa68a6396b9c6bfb91f12cdefdcbc71fd6a87d858161cc8d72f->enter($__internal_ad315157240e2aa68a6396b9c6bfb91f12cdefdcbc71fd6a87d858161cc8d72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ad315157240e2aa68a6396b9c6bfb91f12cdefdcbc71fd6a87d858161cc8d72f->leave($__internal_ad315157240e2aa68a6396b9c6bfb91f12cdefdcbc71fd6a87d858161cc8d72f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
